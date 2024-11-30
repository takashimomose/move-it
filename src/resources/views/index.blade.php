@extends('layouts.common')

@section('title', 'トップ')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
    <main>
        <!-- メインビジュアル -->
        <div class="mainvisual">
            <div class="text">
                <p class="title">ヤマトより、佐川より速い！<br>爆速宅配サービスは「Move It」だけ！</p>
                <a class="btn" href="#">代表の熱い言葉を見る</a>
            </div>
            <ul class="fade">
                <li><img src="images/mainvisual1.jpg" alt=""></li>
                <li><img src="images/mainvisual2.jpg" alt=""></li>
                <li><img src="images/mainvisual3.jpg" alt=""></li>
            </ul>
        </div>

        <section class="introduction">
            <img class="introduction-image fade-in-on-scroll" src="https://oceans-driver.co.jp/assets/images/top/image1.jpg"
                alt="">
            <div class="introduction-text fade-in-on-scroll">
                <h2>サービスドライバーという<br>やりがいを創造する</h2>
                <p>
                    モノを運ぶだけが配送業ではない、<br>
                    お客さまの要望に応えるだけがサービス業でもない。<br>
                    私たち株式会社Move Itは、お客さまの本当のご要望にお応えし、お客さまと一緒になってゴールを目指す企業専門の配送サービス会社です。<br>
                    「配送とサービス」を掛け合わせた“サービスドライバー”たちによって、取引先約100社以上のビジネスの可能性をサポートしています。<br>
                    <br>
                    当社は、ドライバーさんが一生涯働ける安定した職場環境づくりを大切に考えています。<br>
                    軽貨物ドライバーになりたい方、すでに経験が豊富な方、私たちとともに、軽貨物輸送の新しいステージへ走り出しませんか。
                </p>
            </div>
        </section>

        <section class="faq">
            <span class="decoration fade-in-on-scroll">FAQ</span>
            <div class="faq-label fade-in-on-scroll">
                <h2>よくある質問</h2>
                <p class="description">ドライバー希望のみなさんの疑問にお答えします</p>
            </div>

            <div class="container-left fade-in-on-scroll">
                <div class="left">
                    <div class="content">
                        <div class="question-header">
                            <span>Q</span>
                            <h3>業務委託とはなんですか？</h3>
                        </div>
                        <p>業務委託とは、運送会社や荷主からの業務を他の企業や個人に委託する契約のことです。業務受託を受けるドライバーは委託ドライバーとなり、運送会社の社員ではなく個人事業主となります。委託ドライバーには高報酬を追求したり、自分のペースで働けるなどのメリットがあります。
                            <br>委託ドライバーになるには「軽貨物車両・駐車場の用意」「軽貨物運送業の開業届けを出す」「営業用の黒ナンバーを取得」などが必要ですが、オーシャンズではドライバーの皆様の開業をサポートしています。
                        </p>
                    </div>
                </div>
                <div class="right"></div>
            </div>

            <div class="container-right fade-in-on-scroll">
                <div class="left"></div>
                <div class="right">
                    <div class="content">
                        <div class="question-header">
                            <span>Q</span>
                            <h3>業務委託とはなんですか？</h3>
                        </div>
                        <p>業務委託とは、運送会社や荷主からの業務を他の企業や個人に委託する契約のことです。業務受託を受けるドライバーは委託ドライバーとなり、運送会社の社員ではなく個人事業主となります。委託ドライバーには高報酬を追求したり、自分のペースで働けるなどのメリットがあります。
                            <br>委託ドライバーになるには「軽貨物車両・駐車場の用意」「軽貨物運送業の開業届けを出す」「営業用の黒ナンバーを取得」などが必要ですが、オーシャンズではドライバーの皆様の開業をサポートしています。
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <section class="recruit">
            <span class="decoration fade-in-on-scroll">RECRUIT</span>
            <div class="recruit-wrapper">
                <div class="recruit-label fade-in-on-scroll">
                    <h2>募集要項</h2>
                    <p class="description">Move Itは、一人でも多くのドライバーさんとともに<br>軽貨物サービスのNo.1企業を目指します</p>
                    <p>株式会社Move
                        Itは、2008年に『企業専属便お荷物配送.com』を起ち上げ、以来、当社ならではの効率的な配送ネットワークや、当社ならではの付加価値の高いサービスを提供することで、お客さまの期待を超える成果を出し続けています。今後もさらなる信頼性向上、成長・発展を目指し、軽貨物輸送業界の革新と発展に貢献してまいります。
                    </p>
                </div>
                <table class="recruit-table fade-in-on-scroll">
                    <thead class="recruit-thead">
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody class="recruit-tbody">
                        <tr>
                            <th>職種</th>
                            <td>軽貨物配送ドライバー</td>
                        </tr>
                        <tr>
                            <th>応募条件</th>
                            <td>年齢・経験不問、要普通自動車免許（AT可）<br>
                                未経験歓迎！20〜60代まで幅広く活躍中</td>
                        </tr>
                        <tr>
                            <th>雇用形態</th>
                            <td>業務委託</td>
                        </tr>
                        <tr>
                            <th>勤務地</th>
                            <td>東京都・大阪府</td>
                        </tr>
                        <tr>
                            <th>仕事内容</th>
                            <td>宅配業務、企業配送、企業専属便、スポット便</td>
                        </tr>
                        <tr>
                            <th>給与</th>
                            <td>完全歩合制<br>
                                ※歩合は個人の勤務度合い・個々の案件内容による<br>一人ひとりがご自分のペースで働いています。<br>
                                ※月収30万～50万円も可能</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td>一例　9：00～18：00<br>
                                1日4時間～OK！業務委託なので、ご自身の都合や希望の収入に合わせて、ご自身で勤務時間などを決められます。<br>
                                ※直行直帰案件あり　<br class="sp">※車通勤OK</td>
                        </tr>
                        <tr>
                            <th>休日・休暇</th>
                            <td>週5～6日のシフト制勤務なので、月8日前後のお休みです。<br>
                                ※週3日～の勤務も可能です。</td>
                        </tr>
                    </tbody>
                    <tfoot class="recruit-tfoot">
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>

    </main>

    <script>
        // メインビジュアル
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll('.mainvisual .fade li');
            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                showSlide(currentIndex);
            }

            // 最初のスライドを表示
            showSlide(currentIndex);

            // 5秒ごとにスライドを切り替え
            setInterval(nextSlide, 5000);
        });
    </script>

    <script>
        // 他のセクション
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.fade-in-on-scroll');

            const handleScroll = () => {
                elements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    const windowHeight = window.innerHeight || document.documentElement.clientHeight;

                    // 要素が画面の80%の位置に来たら表示
                    if (rect.top <= windowHeight * 0.8) {
                        element.classList.add('is-visible');
                    }
                });
            };

            // スクロールまたはリサイズ時にチェック
            window.addEventListener('scroll', handleScroll);
            window.addEventListener('resize', handleScroll);

            // ページロード時に一度チェック
            handleScroll();
        });
    </script>
@endsection
