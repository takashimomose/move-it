<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function show()
    {
        // セッションから保存された contact_data を取得
        $contactData = Session::get('contact_data', []);

        // viewにcontactDataを渡す
        return view('contact', compact('contactData'));
    }

    public function confirm(ContactRequest $request)
    {
        // 必要なデータを取得

        $contactData = $request->all();

        // Sessionにデータを保存
        Session::put('contact_data', $contactData);

        // compactに配列のキーをそのまま渡す
        return view('contact_confirm', compact('contactData'));
    }

    public function send(Request $request)
    {
        $contactData = $request->all();

        // 現在の日時を取得
        $contactData['send_date'] = Carbon::now()->format('Y年m月d日 H:i:s');
        // メールを送信
        
        Mail::to(env('ADMIN_EMAIL'))->send(new ContactMail($contactData));

        return redirect()->route('contact.complete');
    }

    public function complete()
    {
        return view('contact_complete');
    }
}
