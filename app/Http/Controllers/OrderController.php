<?php
namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function createOrder(Request $request)
    {
        // Validate request
        $request->validate([
            'user_id' => 'required',
            'artwork_id' => 'required',
            'amount' => 'required',
        ]);

        // Create order
        $order = $this->orderService->createOrder($request->all());

        // Handle payment logic (integration with payment gateway)

        return response()->json(['message' => 'Order created successfully', 'order' => $order]);
    }

    public function updateOrderStatus(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        // Update order status
        $order = $this->orderService->updateOrderStatus($id, $request->status);

        return response()->json(['message' => 'Order status updated successfully', 'order' => $order]);
    }
}
