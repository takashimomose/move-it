@push('css')
    <link rel="stylesheet" href="{{ asset('css/campaign_modal.css') }}">
@endpush

<div id="modal-overlay" class="modal">
    <div class="modal-content" style="background-image: url('{{ asset('images/delivery_man.png') }}');">
        <h1>お客さまのHPを<br>作成します！</h1>
        <p class="normal">弊社では配送業に加えHPの作成を行っています。<br>個人事業をしているけど</p>
        <p class="concern">「HPを持ちたい」<br>「作り方が分からない」</p>
        <p class="normal">といったお悩みをお持ちの方は、<br>ぜひお気軽にお問い合わせください。</p>
        <p class="contact">↓お問い合わせはこちら↓</p>
        <div class="link-group">
            <a href="https://x.com/moveit2025" class="x-dm"><img src="{{ asset('images/x.svg') }}" alt=""></a>
            <a href="{{ route('contact.show') }}" class="inquiry"><img src="{{ asset('images/inquiry.svg') }}"
                    alt=""></a>
        </div>
        <button id="close-modal" class="close-btn">閉じる</button>
    </div>
</div>
