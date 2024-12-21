<?php
namespace App\Repositories;

use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function create(array $data)
    {
        return Order::create($data);
    }

    public function updateStatus(Order $order, string $status)
    {
        $order->status = $status;
        $order->save();

        return $order;
    }
    public function find($id){
        return Order::findOrFail($id);
    }
}
