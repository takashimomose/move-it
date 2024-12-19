@extends('layouts.app')

@section('title', '代表挨拶')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/ceo.css') }}">
@endpush

@section('content')
    <main>
        <section class="ceo">
            <div class="ceo-wrapper">
                <div class="ceo-label fade-in-on-scroll">
                    <h2>代表挨拶</h2>
                    {{-- <p class="description">MOVE ITで、軽貨物サービスNo.1を一緒に目指しませんか？</p> --}}
                    <img src="/images/ceo.png" alt="ドライバー未経験の方">
                    <div class="balloon">
                        <p>MOVE
                            IT代表の阿部です。2024年12月に立ち上げた小さな会社ではございますが、ドライバーの皆さんと密にコミュニケーションをとりながら、丁寧・親切・安全を第一に、お客様へ「お品物」だけでなく「笑顔」をお届けしていきたいと思っています。
                        </p>
                        <p>「絶対に稼げます！！」という言葉は簡単には使いません。しっかりと皆さんのお仕事や、生活面をフォローしていける事を大前提に、安心してお仕事をしていただける環境づくりを心がけております。</p>
                        <p>軽貨物歴は2年とまだまだ業界歴は浅いですが、小売業界スーパーバイザーや経験や、海外飲食店経営に携わるなど、豊富な経験知識を生かして、軽貨物だけにとらわれず様々な業種に参入していく予定です。
                        </p>
                        <p>弊社は、夢をもってこの業界で働かれている方を大歓迎しています！！私たちと一緒に、大きな夢を実現させていきましょう！！</p>
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
