<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        // Logic to retrieve and display the cart items
        // You can use sessions, databases, or any other storage mechanism for the cart data

        // For example, using session to get cart items
        $cart = session()->get('cart', []);

        return view('pages/cart', ['cart' => $cart]); // Pass the cart data to the view
    }

    public function addToCart($product_id)
    {
        // Logic to add the product to the cart
        // You can use sessions, databases, or any other storage mechanism for the cart data

        // For example, using session to store cart items
        $cart = session()->get('cart', []);
        $cart[] = ['product_id' => $product_id, 'quantity' => 1];
        session(['cart' => $cart]);

        return redirect()->route('cart');
    }
}
