<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('frontend.pages.checkout');
    }
    public function storeAddress(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'country' => 'required|string',
            'state' => 'nullable|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'address' => 'required|string',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Create a new user address instance
        $address = new UserAddress();
        $address->user_id = $user->userId;
        $address->name = $request->input('name');
        $address->phone = $request->input('phone');
        $address->email = $request->input('email');
        $address->country = $request->input('country');
        $address->state = $request->input('state');
        $address->city = $request->input('city');
        $address->zip = $request->input('zip');
        $address->address = $request->input('address');
        $address->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Address saved successfully');
    }
}
