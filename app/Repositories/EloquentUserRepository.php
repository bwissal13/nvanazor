<?php
namespace App\Repositories;

use App\Models\User;


class EloquentUserRepository implements UserRepositoryInterface
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function updatePassword(User $user, $password)
    {
        $user->update(['password' => bcrypt($password)]);
    }

    public function getUserRoles(User $user)
    {
        return $user->roles;
    }

    public function hasRole(User $user, $roleName)
    {
        return $user->roles->contains('name', $roleName);
    }

    public function assignRole(User $user, $role)
    {
        $user->roles()->sync([$role->id]);
    }
    
    public function findUserById($id)
    {
        return User::find($id);
    }
}
