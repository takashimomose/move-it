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
                    <p class="description">お仕事についてのご質問やご応募をお問い合わせください。</p>
                    <form action="{{ route('contact.confirm') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">お名前</label>
                            <input class="form-input" type="text" id="name" name="name" placeholder="例：山田太郎"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name_kana" class="form-label">フリガナ</label>
                            <input class="form-input" type="text" id="name_kana" name="name_kana" placeholder="例：ヤマダタロウ"
                                value="{{ old('name_kana') }}">
                            @error('name_kana')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="form-label">郵便番号</label>
                            <input class="form-input" type="text" id="postal_code" name="postal_code" placeholder="例：123-4567"
                                value="{{ old('postal_code') }}"
                                oninput="this.value = this.value.replace(/^(\d{3})(\d{1,4})$/, '$1-$2')">
                            @error('postal_code')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">住所</label>
                            <input class="form-input" type="text" id="address" name="address" placeholder="例：東京都新宿区西新宿2丁目8番地1号ムーブイットハイツ303号室"
                                value="{{ old('address') }}">
                            @error('address')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tel" class="form-label">電話番号</label>
                            <input class="form-input" type="tel" id="tel" name="tel" placeholder="例：090-1234-5678"
                                value="{{ old('tel') }}">
                            @error('tel')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">メールアドレス</label>
                            <input class="form-input" type="email" id="email" name="email" placeholder="例：moveit@example.com"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">お問い合わせ・ご応募内容</label>
                            <textarea class="form-textarea" id="message" name="message" placeholder="" value="{{ old('message') }}"></textarea>
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

    <script>
        document.getElementById('postal_code').addEventListener('input', function() {
            const postalCode = this.value.replace(/[^0-9]/g, ''); // 数字以外を除去
            if (postalCode.length === 7) { // 郵便番号が7桁の場合に実行
                fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${postalCode}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('住所の取得に失敗しました');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data && data.results && data.results[0]) {
                            const address = data.results[0].address1 + data.results[0].address2 + data
                                .results[0].address3;
                            document.getElementById('address').value = address;
                        } else {
                            document.getElementById('address').value = '';
                            alert('住所が見つかりませんでした');
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        alert('住所を取得中にエラーが発生しました');
                    });
            }
        });
    </script>
@endsection
