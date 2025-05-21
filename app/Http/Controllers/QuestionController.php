<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function save(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:questions,email',
            'body' => 'required|string|max:5000',
        ]);

       Question::create($request->all());

        return back()->with('success', 'Your question has been submitted successfully!');
    }
}
