@extends('layouts.app')

@section('title', 'MOVE IT | ' . '代表挨拶')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/ceo.css') }}">
@endpush

@section('content')
    <main>
        <section class="ceo">
            <div class="ceo-wrapper">
                <div class="ceo-label fade-in-on-scroll">
                    <h2>代表挨拶</h2>
                    <img class="ceo-photo" src="{{ asset('images/ceo.jpg') }}" alt="CEO">
                    <div class="ceo-intro">
                        <img class="ceo-logo" src="{{ asset('images/logo.svg') }}" alt="ロゴ">
                        <div class="ceo-info">
                            <p class="ceo-title">代表取締役</p>
                            <p class="ceo-name">阿部 匠吾</p>
                        </div>
                    </div>
                    <div class="balloon">
                        <p>MOVE IT代表の阿部です。</p>
                        <p>2024年12月に立ち上げた小さな会社ではございますが、お客様へお品物を届けるだけでなく、『お届け物に込められた思い』を大事に扱いお届けさせていただきます。
                        </p>
                        <p>昨今の荷量増加が配達員へのプレッシャーに変わり、物を届けるだけ。という状況に変わってしまっているところが非常に多くなってきております。</p>
                        <p>弊社では一般的な配達員だけにとどまらず、プラスアルファで『思い』をお届けすることに注力している会社です。研修制度を終えた配達員が、お客様のもとへ配達をさせていただきますので、ご安心くださいませ。
                        </p>
                        <h3>これから配達員を目指す皆様へ</h3>
                        <p>「絶対に稼げます！！」という言葉は簡単には使いません。しっかりと皆さんのお仕事や、生活面をフォローしていける事を大前提に、安心して仕事ができる環境づくりを心がけております。</p>
                        <p>働くにあたってどのような条件が必要か。エリアはどこがいいか。時間帯はどのくらいがいいか。など、細かな質問でも大丈夫ですので、お問い合わせください。</p>
                        <p>弊社は夢をもってこの業界で働かれている方を大歓迎しています！！私たちと一緒に、大きな夢を実現させていきましょう！！</p>
                        <div class="signature">
                            <p>MOVE IT代表取締役</p>
                            <p>阿部匠吾</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
