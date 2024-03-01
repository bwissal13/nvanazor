<?php
namespace App\Repositories;

use App\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{
    public function getAllRoles()
    {
        return Role::all();
    }

    public function findRoleById($id)
    {
        return Role::find($id);
    }
}