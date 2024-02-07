<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        $user = Auth::user();
        $cartItems = CartItem::where('user_id', $user->userId)->with('book')->get();

        return view('frontend.pages.cart', compact('cartItems'));
    }

    public function addToCart($id)
    {
        $user = Auth::user();
        $cartItem = CartItem::where('user_id', $user->userId)
            ->where('book_id', $id)
            ->first();

        if ($cartItem) {
            // If item exists, update the quantity in the database
            $cartItem->increment('quantity');
        } else {
            // If item does not exist, create a new cart item in the database
            $cartItem = new CartItem();
            $cartItem->user_id = $user->userId;
            $cartItem->book_id = $ISBN;
            $cartItem->quantity = 1;
            $cartItem->save();
        }

        return redirect()->back()->with('success', 'Book is added to the cart');
    }

    public function qtyIncrement($id)
    {
        $user = Auth::user();
        $cartItem = CartItem::where('user_id', $user->userId)
            ->where('id', $id)
            ->firstOrFail();

        // Increment the quantity
        $cartItem->increment('quantity');

        return redirect()->route('cart')->with('success', 'Quantity incremented successfully');
    }

    public function qtyDecrement($id)
    {
        $user = Auth::user();
        $cartItem = CartItem::where('user_id', $user->userId)
            ->where('id', $id)
            ->firstOrFail();

        // Decrement the quantity, ensuring it's at least 1
        $newQuantity = max(1, $cartItem->quantity - 1);
        $cartItem->update(['quantity' => $newQuantity]);

        // If the new quantity is less than or equal to 0, remove the item from the cart
        if ($newQuantity <= 0) {
            $cartItem->delete();
            return redirect()->route('cart')->with('success', 'Item removed from the cart');
        }

        return redirect()->route('cart')->with('success', 'Quantity decremented successfully');
    }

    public function updateCart($id)
    {
        $user = Auth::user();
        $cartItem = CartItem::where('user_id', $user->userId)
            ->where('id', $id)
            ->firstOrFail();

        request()->validate([
            'quantity' => 'required|numeric|min:1',
        ]);

        // Update the quantity
        $cartItem->update(['quantity' => request('quantity')]);

        return redirect()->route('cart')->with('success', 'Cart updated successfully');
    }

    public function removeBook($id)
    {
        $user = Auth::user();
        $cartItem = CartItem::where('user_id', $user->userId)
            ->where('id', $id)
            ->firstOrFail();

        $cartItem->delete();

        return redirect()->route('cart')->with('success', 'Book removed from the cart');
    }
}
