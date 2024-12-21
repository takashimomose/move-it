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
                    <form action="" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <th class="confirm-label">項目</th>
                            <th>内容</th>
                        </tr>
                        <tr>
                            <td class="confirm-label">お名前</td>
                            <td>{{ $name }}</td>
                        </tr>
                        <tr>
                            <td class="confirm-label">フリガナ</td>
                            <td>{{ $nameKana }}</td>
                        </tr>
                        <tr>
                            <td class="confirm-label">郵便番号</td>
                            <td>{{ $postalCode }}</td>
                        </tr>
                        <tr>
                            <td class="confirm-label">住所</td>
                            <td>{{ $address }}</td>
                        </tr>
                        <tr>
                            <td class="confirm-label">電話番号</td>
                            <td>{{ $tel }}</td>
                        </tr>
                        <tr>
                            <td class="confirm-label">メールアドレス</td>
                            <td>{{ $email }}</td>
                        </tr>
                        <tr>
                            <td class="confirm-label">お問い合わせ内容</td>
                            <td>{{ $message }}</td>
                        </tr>
                    </table>

                    <div class="form-buttons">
                        <form action="" method="post">
                            @csrf
                            <button class="edit-btn" type="submit" name="action" value="edit">修正する</button>
                            <button class="primary-btn" type="submit" name="action" value="submit">送信する</button>
                        </form>
                    </div>
                {{-- </div> --}}
            </div>
        </section>
    </main>
@endsection
