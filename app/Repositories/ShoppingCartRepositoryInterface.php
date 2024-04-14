<?php

namespace App\Repositories;

interface ShoppingCartRepositoryInterface
{
    public function addItem(array $data);

    public function removeItem(array $data);

    public function editItem(array $data);

    public function getCartItems($user_id);
}

