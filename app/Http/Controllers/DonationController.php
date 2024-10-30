<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    // Отображение формы доната
    public function create()
    {
        return view('donate'); // файл donate.blade.php
    }

    // Сохранение доната в БД
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1',
        ]);

        Donation::create([
            'donor_name' => $request->name,
            'donor_email' => $request->email,
            'amount' => $request->amount,
        ]);

        return redirect()->route('donate.create')->with('success', 'Thank you for your donation!');
    }

}

