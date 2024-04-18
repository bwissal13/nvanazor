<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository

{
    public function getAll()
    {
        return User::all();
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }
}
