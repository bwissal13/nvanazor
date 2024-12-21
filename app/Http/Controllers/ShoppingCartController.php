<?php
namespace App\Http\Controllers;

use App\Services\ShoppingCartService;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    protected $shoppingCartService;

    public function __construct(ShoppingCartService $shoppingCartService)
    {
        $this->shoppingCartService = $shoppingCartService;
    }

    public function addItem(Request $request)
    {
        // Validate request
        $request->validate([
            'user_id' => 'required',
            'artwork_id' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);

        // Add item to the shopping cart
        $this->shoppingCartService->addItem($request->all());

        return response()->json(['message' => 'Item added to shopping cart successfully']);
    }

    public function removeItem(Request $request)
    {
        // Validate request
        $request->validate([
            'user_id' => 'required',
            'artwork_id' => 'required',
        ]);

        // Remove item from the shopping cart
        $this->shoppingCartService->removeItem($request->all());

        return response()->json(['message' => 'Item removed from shopping cart successfully']);
    }

    public function editItem(Request $request)
    {
        // Validate request
        $request->validate([
            'user_id' => 'required',
            'artwork_id' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);

        // Edit item in the shopping cart
        $this->shoppingCartService->editItem($request->all());

        return response()->json(['message' => 'Item edited in shopping cart successfully']);
    }

    public function viewCart(Request $request)
    {
        // Validate request
        $request->validate([
            'user_id' => 'required',
        ]);

        // View shopping cart items
        $user_id = $request->user_id;
        $cartItems = $this->shoppingCartService->getCartItems($user_id);

        return response()->json(['cart_items' => $cartItems]);
    }
}
