<?php
namespace App\Services;

use App\Repositories\OrderRepositoryInterface;

class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function createOrder(array $data)
    {
        // Perform any additional business logic, validation, or data manipulation here
        
        return $this->orderRepository->create($data);
    }

    public function updateOrderStatus($orderId, $status)
    {
        $order = $this->orderRepository->find($orderId);
        
        // Perform any additional business logic or validation here
        
        return $this->orderRepository->updateStatus($order, $status);
    }
}
