<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SocialiteController extends Controller
{
    /**
     * Redirect ke provider OAuth (Google, Facebook, dll)
     */
    public function loginSocial($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Callback setelah autentikasi berhasil dari provider
     */
    public function callbackSocial($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->stateless()->user();

            Log::info('Google User Data:', [
                'id' => $socialUser->getId(),
                'email' => $socialUser->getEmail(),
            ]);

            // Cek apakah user sudah ada berdasarkan email
            $existingUser = User::where('email', $socialUser->getEmail())->first();

            if ($existingUser) {
                // Jika user sudah ada tetapi belum punya google_id, update datanya
                if (!$existingUser->google_id) {
                    $existingUser->google_id = $socialUser->getId();
                    $existingUser->save();
                }

                Auth::login($existingUser);
            } else {
                // Jika user belum ada, buat user baru dengan google_id
                $newUser = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'google_id' => $socialUser->getId(),
                    'password' => bcrypt(uniqid()), // Gunakan password acak
                ]);

                Auth::login($newUser);
            }

            return redirect('/')->with('success', 'Login berhasil!');
        } catch (\Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            return redirect()->route('login')->withErrors(['google' => 'Gagal login dengan Google']);
        }
    }
}
