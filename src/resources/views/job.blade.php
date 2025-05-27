@extends('layouts.app')

@section('title', 'MOVE IT | ' . '配送案件')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/job.css') }}?v={{ filemtime(public_path('css/job.css')) }}">
@endpush

@section('content')
    <main>
        <section class="job-wrapper">
            <div class="job-description">
                <h2 class="section-title">常時募集中・高定着率の案件</h2>
                <h3 class="section-subtitle">家具配送・設置案件</h3>

                <p class="job-message">以下のようなお悩みをお持ちの方へ必見のお仕事です！</p>
                
                <ul class="job-benefits">
                    <li>一か所の現場で20,000円以上の売り上げを立てたい…</li>
                    <li>宅配で何百個も配るのに疲れてきた…</li>
                    <li>組み合わせやすい案件がなかなか見つからない…</li>
                    <img class="funiture-job-photo" src="{{ asset('images/furniture_job.png') }}" alt="家具配送">
                </ul>
                
                <h3 class="section-subtitle">仕事内容</h3>
                <p class="job-description">倉庫からお客様宅へ家具を配送・設置するお仕事です。</p>

                <h3 class="section-subtitle">報酬</h3>
                <p class="job-payment">
                    基本売上：17,500円<br>
                    17:30以降は1分ごとに25円（税別）の残業代を支給<br>
                    ※1時間あたり1,500円換算
                </p>

                <h3 class="section-subtitle">働き方</h3>
                <p class="job-style">その日の状況によっては、拠点を経由せず直行直帰も可能です。</p>

                <h3 class="section-subtitle">お問い合わせ</h3>
                <p class="job-invite">現在、弊社では本案件の増車拡大中です。ご興味のある方は、ぜひ一度ご連絡ください！</p>
                <p class="job-contact">
                    📞 <a href="tel:08074272883">080-7427-2883</a><br>
                    📧 <a href="mailto:info@mvit.jp">info@mvit.jp</a><br>
                    🔗 <a
                        href="https://jp.indeed.com/m/viewjob?jk=0287914eeb32be54&from=serpJapan&prevUrl=http%3A%2F%2Fjp.indeed.com%2Fq-%25E8%25BB%25BD%25E8%25B2%25A8%25E7%2589%25A9%25E5%25AE%25B6%25E5%2585%25B7%25E9%2585%258D%25E9%2580%2581-%25E6%25B1%2582%25E4%25BA%25BA.html&mclk=default&xpse=SoCY67I3xIBNZowE9B0LbzkdCdPP&xfps=464bcfc7-33b7-4141-9692-2ae8f581e04f&xkcb=SoCR67M3xIBN4VQjM50JbzkdCdPP"
                        target="_blank" rel="noopener noreferrer">Indeedの求人ページはこちら</a>
                </p>
            </div>
        </section>
    </main>
@endsection
