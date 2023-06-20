<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'payment_method' => 'required',
            'shipping_address' => 'required',
            'phone' => 'required',
            'person_name' => 'required',
        ]);

        dd('order placed');
    }
}