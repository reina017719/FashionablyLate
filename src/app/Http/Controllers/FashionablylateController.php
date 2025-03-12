<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['lastname', 'firstname', 'gender', 'email', 'tel', 'address', 'building', 'detail']);

        return view('confirm', ['contact' => $contact]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            // 他のバリデーションルール
        ]);

        return redirect()->route('index')->with('success', 'お問い合わせありがとうございます！');
    }
}
