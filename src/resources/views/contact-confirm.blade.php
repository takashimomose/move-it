@extends('layouts.app')

@section('title', '入力内容確認')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <main>
        <section class="contact">
            <div class="contact-wrapper">
                <div class="contact-label">
                    <h2>入力内容確認</h2>
                    <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        {{ $name }}
                    </div>
                    <div class="form-group">
                        {{ $tel }}
                    </div>
                    <div class="form-group">
                        {{ $email }}
                    </div>
                    <div class="form-group">
                        {{ $message }}
                    </div>
                    <button class="primary-btn" type="submit">送信</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
