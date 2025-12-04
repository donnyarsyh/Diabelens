<?php

namespace App\Services\Auth;

use Illuminate\Http\Request;
use App\Models\User;

interface AuthServiceInterface
{
    public function attemptLogin(array $credentials): bool;

    public function logout(Request $request): void;

    public function register(array $data): array;
}
