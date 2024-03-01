<?php


namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getAllUsers();

    public function findByEmail($email);
    
    public function findUserById($id);

    public function create(array $data);

    public function updatePassword(User $user, $password);

    public function getUserRoles(User $user);

    public function hasRole(User $user, $roleName);

    public function assignRole(User $user, $role);
}
