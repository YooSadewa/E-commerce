<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CartItem;

class UserController extends Controller
{
    public function showCart()
    {
        if (auth()->user()) {
            $user = auth()->user();
            $cartItems = $user->cartItems()->with('product')->get();

            return view('cart', compact('cartItems'));
        } else {
            // Redirect to login or display an appropriate message
            return redirect()->route('login');
        }
    }
}