@extends('layouts.app')

@section('title', 'MOVE IT | ' . 'お問い合わせ完了')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/contact_complete.css') }}">
@endpush

@section('content')
    <main>
        <section class="contact-complete">
            <div class="contact-complete-wrapper">
                <div class="contact-complete-label">
                    <h2>お問い合わせ完了</h2>
                    <p>お問い合わせいただきありがとうございます。</p>
                    <p>お問い合わせいただき内容につきましては、確認のうえご連絡させていただきます。</p>
                    <a href="{{ route('index') }}" class="back-btn">トップへ戻る</a>
                </div>
            </div>
        </section>
    </main>
@endsection
