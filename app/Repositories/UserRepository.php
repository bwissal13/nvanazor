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

    // Other methods for updating, deleting, etc., can be added here
}
