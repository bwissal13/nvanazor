<?php
namespace App\Repositories;

use App\Models\Role;

interface RoleRepositoryInterface
{
    public function getAllRoles();

    public function findRoleById($id);
}