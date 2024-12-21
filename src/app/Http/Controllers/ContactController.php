<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function confirm(ContactRequest $request)
    {
        // 必要なデータを取得

        $contactData = $request->only('name', 'name_kana', 'postal_code', 'address', 'tel', 'email', 'message');

        // compactに配列のキーをそのまま渡す
        return view('contact-confirm', compact('contactData'));
    }

    public function send(Request $request)
    {
        $contactData = $request->only('name', 'name_kana', 'postal_code', 'address', 'tel', 'email', 'message');

        // 現在の日時を取得
        $contactData['send_date'] = Carbon::now()->format('Y年m月d日 H:i:s');
        // メールを送信
        Mail::to(env('ADMIN_EMAIL'))->send(new ContactMail($contactData));

        return redirect()->route('index');
    }
}
