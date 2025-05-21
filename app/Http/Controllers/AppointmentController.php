<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'date' => 'required|date',
            'message' => 'nullable|string|max:1000',
        ]);

        // Store the appointment data in the database
        Appointment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'message' => $request->input('message'),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}
