<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService implements AuthServiceInterface
{
    public function attemptLogin(array $credentials): bool
    {
        return Auth::attempt($credentials);
    }

    public function logout(Request $request): void
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    public function register(array $data): array
    {
        // Cek apakah email sudah terdaftar
        $existingUser = User::where('email', $data['email'])->first();

        if ($existingUser) {
            return [
                'success' => false,
                'message' => 'Email sudah terdaftar.',
                'user'    => $existingUser
            ];
        }

        // Jika belum ada → buat user baru
        $newUser = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return [
            'success' => true,
            'message' => 'User berhasil dibuat.',
            'user'    => $newUser
        ];
    }
}
