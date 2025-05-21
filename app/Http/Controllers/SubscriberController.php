<?php

namespace App\Http\Controllers;

use App\Models\SubscriberModel;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email'
        ]);

        SubscriberModel::create([
            'email' => $request->email
        ]);
        return back()->with('success', 'Thank you for subscribing!');
    }
}
