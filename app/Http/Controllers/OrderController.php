<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use Stripe\Charge;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function createOrder(Request $request)
    {
        try {
            // Validate request
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'artwork_id' => 'required',
                'amount' => 'required',
            ]);
    
            if ($validator->fails()) {
                throw new ValidationException($validator);
            }
    
            // Create order
            $order = $this->orderService->createOrder($request->all());
    
            // Handle payment logic (integration with payment gateway)
            // In this case, we'll just redirect to a success page
            return Redirect::route('payment.success')->with('order', $order);
        } catch (ValidationException $e) {
            // Handle validation errors
            return Redirect::back()->withErrors($e->validator->errors());
        }
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
