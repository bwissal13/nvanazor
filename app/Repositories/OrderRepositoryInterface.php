<?php


namespace App\Repositories;

use App\Models\Order;

interface OrderRepositoryInterface
{
    public function create(array $data);

    public function updateStatus(Order $order, string $status);
    public function find($id);
}
