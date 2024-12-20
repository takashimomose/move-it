@extends('layouts.app')

@section('title', 'お問い合わせ・ご応募')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <main>
        <section class="contact">
            <div class="contact-wrapper">
                <div class="contact-label">
                    <h2>お問い合わせ・ご応募</h2>
                    <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-input" type="text" id="name" name="name" placeholder="お名前" value="{{ old('name') }}">
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-input" type="tel" id="tel" name="tel" placeholder="電話番号" value="{{ old('tel') }}">
                        @error('tel')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-input" type="email" id="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-textarea" id="message" name="message" placeholder="お問い合わせ・ご応募内容"  value="{{ old('message') }}"></textarea>
                        @error('message')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="primary-btn" type="submit">入力内容を確認</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
