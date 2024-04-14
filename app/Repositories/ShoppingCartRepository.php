<?php

namespace App\Repositories;

use App\Models\ShoppingCart;

class ShoppingCartRepository implements ShoppingCartRepositoryInterface
{
    public function addItem(array $data)
    {
        // Check if the item already exists in the shopping cart for the user
        $existingItem = ShoppingCart::where('user_id', $data['user_id'])
            ->where('artwork_id', $data['artwork_id'])
            ->first();

        if ($existingItem) {
            // If the item already exists, update the quantity
            $existingItem->increment('quantity', $data['quantity']);
        } else {
            // If the item does not exist, create a new shopping cart item
            ShoppingCart::create([
                'user_id' => $data['user_id'],
                'artwork_id' => $data['artwork_id'],
                'quantity' => $data['quantity'],
            ]);
        }
    }

    public function removeItem(array $data)
    {
        // Find the shopping cart item and delete it
        ShoppingCart::where('user_id', $data['user_id'])
            ->where('artwork_id', $data['artwork_id'])
            ->delete();
    }

    public function editItem(array $data)
    {
        // Update the quantity of the shopping cart item
        ShoppingCart::where('user_id', $data['user_id'])
            ->where('artwork_id', $data['artwork_id'])
            ->update(['quantity' => $data['quantity']]);
    }

    public function getCartItems($user_id)
    {
        // Retrieve all items in the shopping cart for the user
        return ShoppingCart::where('user_id', $user_id)->get();
    }
}
