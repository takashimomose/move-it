@extends('layouts.app')

@section('title', '入力内容確認')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/contact-confirm.css') }}">
@endpush

@section('content')
    <main>
        <section class="contact">
            <div class="contact-confirm-wrapper">
                {{-- <div class="contact-confirm-label"> --}}
                <h2>入力内容確認</h2>
                <p>以下の内容で送信します。よろしければ「送信」ボタンを押してください。</p>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td class="confirm-label">お名前</td>
                            <td>{{ $contactData['name'] }}</td>
                            <input type="hidden" name="name" value="{{ $contactData['name'] }}">
                        </tr>
                        <tr>
                            <td class="confirm-label">フリガナ</td>
                            <td>{{ $contactData['name_kana'] }}</td>
                            <input type="hidden" name="name_kana" value="{{ $contactData['name_kana'] }}">
                        </tr>
                        <tr>
                            <td class="confirm-label">郵便番号</td>
                            <td>{{ $contactData['postal_code'] }}</td>
                            <input type="hidden" name="postal_code" value="{{ $contactData['postal_code'] }}">
                        </tr>
                        <tr>
                            <td class="confirm-label">住所</td>
                            <td>{{ $contactData['address'] }}</td>
                            <input type="hidden" name="address" value="{{ $contactData['address'] }}">
                        </tr>
                        <tr>
                            <td class="confirm-label">電話番号</td>
                            <td>{{ $contactData['tel'] }}</td>
                            <input type="hidden" name="tel" value="{{ $contactData['tel'] }}">
                        </tr>
                        <tr>
                            <td class="confirm-label">メールアドレス</td>
                            <td>{{ $contactData['email'] }}</td>
                            <input type="hidden" name="email" value="{{ $contactData['email'] }}">
                        </tr>
                        <tr>
                            <td class="confirm-label">お問い合わせ内容</td>
                            <td>{{ $contactData['message'] }}</td>
                            <input type="hidden" name="message" value="{{ $contactData['message'] }}">
                        </tr>
                    </table>

                    <div class="form-buttons">
                        {{-- <button class="edit-btn" type="submit" name="action" value="edit">修正する</button> --}}
                        <button class="primary-btn" type="submit" name="action" value="submit">送信する</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
