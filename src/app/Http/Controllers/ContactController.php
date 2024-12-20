<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        // 必要なデータを取得
        $contactData = $request->only('name', 'tel', 'email', 'message');

        // 配列の各要素を個別の変数に分解
        $name = $contactData['name'];
        $tel = $contactData['tel'];
        $email = $contactData['email'];
        $message = $contactData['message'];

        // dd($contactData);

        return view('contact-confirm', compact('name', 'tel', 'email', 'message'));
    }
}
