<?php

namespace App\Models;

class Authentication
{
    public function login(string $username, string $password): bool
    {
        $validUsername = 'admin';
        $validPassword = '1234';

        return $username === $validUsername && $password === $validPassword;
    }
}