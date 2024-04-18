<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use App\Services\ShoppingCartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    protected $shoppingCartService;

    public function __construct(ShoppingCartService $shoppingCartService)
    {
        $this->shoppingCartService = $shoppingCartService;
    }


    // public function addItem(Request $request)
    // {
    //     // Check if the user is authenticated
    //     $user_id = auth()->id();

    //     // If the user is not authenticated, use a guest user identifier stored in the session
    //     if (!$user_id) {
    //         $guestUserId = session()->get('guest_user_id');

    //         // If a guest user identifier doesn't exist, generate and store one
    //         if (!$guestUserId) {
    //             $guestUserId = uniqid();
    //             session(['guest_user_id' => $guestUserId]);
    //         }

    //         $user_id = $guestUserId;
    //     }

    //     // Check if the item already exists in the shopping cart for the user
    //     $existingItem = ShoppingCart::where('user_id', $user_id)
    //         ->where('artwork_id', $request['artwork_id'])
    //         ->first();

    //     // If the item already exists, update its quantity
    //     if ($existingItem) {
    //         return response()->json(['message' => 'Already added to cart successfully']);
    //     } else {
    //         // If the item doesn't exist, create a new entry in the shopping cart
    //         ShoppingCart::create([
    //             'user_id' => $user_id,
    //             'artwork_id' => $request['artwork_id'],
    //         ]);
    //     }

    //     // Optionally, you can return a response or redirect the user
    //     return response()->json(['message' => 'Item added to cart successfully']);
    // }

    public function addItem(Request $request)
    {
        // Check if the user is authenticated
        $user_id = auth()->id();

        // If the user is not authenticated, use a guest user identifier stored in the session
        if (!$user_id) {
            $guestUserId = session()->get('guest_user_id');

            // If a guest user identifier doesn't exist, generate and store one
            if (!$guestUserId) {
                $guestUserId = uniqid();
                session(['guest_user_id' => $guestUserId]);
            }

            $user_id = $guestUserId;
        }

        // Check if the item already exists in the shopping cart for the user
        $existingItem = ShoppingCart::where('user_id', $user_id)
            ->where('artwork_id', $request['artwork_id'])
            ->first();

        // If the item already exists, update its quantity
        if ($existingItem) {
            return response()->json(['message' => 'Already added to cart successfully']);
        } else {
            // If the item doesn't exist, create a new entry in the shopping cart
            ShoppingCart::create([
                'user_id' => $user_id,
                'artwork_id' => $request['artwork_id'],
            ]);
        }

        // Retrieve cart items after adding the new item
        $cartItems = $this->shoppingCartService->getCartItems($user_id);

        // Pass the cart items to the view
        return view('front.ShoppingCart', ['cartItems' => $cartItems]);
    }

    // public function removeItem(Request $request)
    // {
    //     // Validate request
    //     $request->validate([
    //         'user_id' => 'required',
    //         'artwork_id' => 'required',
    //     ]);

    //     // Remove item from the shopping cart
    //     $this->shoppingCartService->removeItem($request->all());

    //     return redirect()->back()->with('success', 'Item removed from shopping cart successfully');
    // }
    public function removeItem(Request $request)
    {
        // Extract the item ID from the request
        $id = $request->route('id');
    
        // Check if the user is authenticated
        $user_id = auth()->id();
    
        // If the user is not authenticated, use a guest user identifier stored in the session
        if (!$user_id) {
            $user_id = session()->get('guest_user_id');
        }
    
        // Find the item in the shopping cart
        $item = ShoppingCart::where('user_id', $user_id)
                            ->where('id', $id)
                            ->first();
    
        // If the item exists, delete it
        if ($item) {
            $item->delete();
            return redirect()->route('front.ShoppingCart')->with('success', 'Item removed successfully');
        } else {
            return redirect()->route('front.ShoppingCart')->with('error', 'Item not found in the cart');
        }
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
        // Check if the user is authenticated
        $user_id = Auth::id();
    
        // If the user is not authenticated, use a guest user identifier stored in the session
        if (!$user_id) {
            $guestUserId = session()->get('guest_user_id');
    
            // If a guest user identifier doesn't exist, generate and store one
            if (!$guestUserId) {
                $guestUserId = uniqid();
                session(['guest_user_id' => $guestUserId]);
            }
    
            $user_id = $guestUserId;
        }
        
        // Retrieve cart items
        $cartItems = $this->shoppingCartService->getCartItems($user_id);
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item->artwork->price;
        }
    
         // Assuming there's only one artwork in the cart, you can retrieve its ID
    $artworkId = $cartItems->first()->artwork->id;

    // Pass the cart items, total price, artwork ID, and user ID to the view
    return view('front.ShoppingCart', compact('cartItems', 'totalPrice', 'artworkId', 'user_id'));
    }
    
    // public function viewCart(Request $request)
    // {
    //     // Check if the user is authenticated
    //     $user_id = auth()->id();

    //     // If the user is not authenticated, use a guest user identifier stored in the session
    //     if (!$user_id) {
    //         $guestUserId = session()->get('guest_user_id');

    //         // If a guest user identifier doesn't exist, generate and store one
    //         if (!$guestUserId) {
    //             $guestUserId = uniqid();
    //             session(['guest_user_id' => $guestUserId]);
    //         }

    //         $user_id = $guestUserId;
    //     }
        
    //     // Retrieve cart items
    //     $cartItems = $this->shoppingCartService->getCartItems($user_id);
    //     $totalPrice = 0;
    //     foreach ($cartItems as $item) {
    //         $totalPrice += $item->artwork->price;
    //     }
    //     // Pass the cart items to the view
    //     return view('front.ShoppingCart', compact('cartItems', 'totalPrice'));
    // }
}
