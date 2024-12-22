@extends('layouts.app')

@section('title', 'MOVE IT | ' . 'お問い合わせ・ご応募')

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
                    <form action="{{ route('contact.confirm') }}" method="POST" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">お名前</label>
                            <input class="form-input" type="text" id="name" name="name" placeholder="例：山田太郎"
                                value="{{ old('name', $contactData['name'] ?? '') }}">
                            @error('name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name_kana" class="form-label">フリガナ</label>
                            <input class="form-input" type="text" id="name_kana" name="name_kana" placeholder="例：ヤマダタロウ"
                                value="{{ old('name_kana', $contactData['name_kana'] ?? '') }}">
                            @error('name_kana')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="form-label">郵便番号</label>
                            <input class="form-input" type="text" id="postal_code" name="postal_code" maxlength="8"
                                placeholder="例：123-4567" value="{{ old('postal_code', $contactData['postal_code'] ?? '') }}"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/^(\d{3})(\d{1,4})$/, '$1-$2')">
                            @error('postal_code')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">住所</label>
                            <input class="form-input" type="text" id="address" name="address"
                                placeholder="例：東京都新宿区西新宿2丁目8番地1号" value="{{ old('address', $contactData['address'] ?? '') }}">
                            @error('address')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tel" class="form-label">電話番号</label>
                            <input class="form-input" type="tel" id="tel" name="tel" pattern="[0-9]*"
                                minlength= "10" maxlength="11" placeholder="例：09012345678" value="{{ old('tel', $contactData['tel'] ?? '') }}"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            @error('tel')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">メールアドレス</label>
                            <input class="form-input" type="email" id="email" name="email"
                                placeholder="例：moveit@example.com" value="{{ old('email', $contactData['email'] ?? '') }}">
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">お問い合わせ・ご応募内容</label>
                            <textarea class="form-textarea" id="message" name="message" placeholder="">{{ old('message', $contactData['message'] ?? '') }}</textarea>
                            @error('message')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="privacy-policy" class="form-label">プライバシーポリシー</label>
                            <div class="privacy-policy-container">
                                <div class="privacy-policy">
                                    <!-- ここにプライバシーポリシーの内容を追加 -->
                                    <h3>個人情報保護方針</h3>
                                    <p>当サイトでは、お客様のプライバシーを重視し、個人情報の取り扱いについては十分に配慮しています。情報は慎重に取り扱い、適切に管理し、保護することをお約束します。</p>
                                    <h4>個人情報の利用目的</h4>
                                    <ul>
                                        <li>お客様に最適なサービスを提供するためのご連絡。</li>
                                        <li>お客様からの質問に対する回答や確認のご連絡。</li>
                                    </ul>
                                    <p>収集した個人情報は、お客様の同意なく、記載した目的以外では使用いたしません。</p>
                                    <p>情報の漏洩を防ぐために必要な対策を講じ、従業員及び委託先の管理にも注力します。</p>
                                    <p>お客様の同意なしに、第三者へ情報を提供することはありません。</p>
                                    <p>お客様が希望された場合、情報を開示いたします。</p>
                                    <p>もし公開された情報に誤りがあった場合には、速やかに訂正または削除いたします。</p>
                                    <p>個人情報に関する苦情には、迅速かつ適切に対応いたします。</p>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="privacy_policy" value="1" {{ old('privacy_policy') ? 'checked' : '' }}>
                                <label class="form-check-label">プライバシーポリシーに同意する</label>
                                @error('privacy_policy')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
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
