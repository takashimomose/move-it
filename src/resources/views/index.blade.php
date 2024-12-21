@extends('layouts.app')

@section('title', 'トップ')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
    <main>
        <!-- メインビジュアル -->
        <div class="mainvisual">
            <div class="text">
                <p class="title">動く力で、すべての人を笑顔へ。</p>
                <a class="btn" href="#introduction">MOVE ITとは</a>
            </div>
            <ul class="fade">
                <li><img src="images/mainvisual_01.png" alt=""></li>
                {{-- <li><img src="images/mainvisual2.png" alt=""></li> --}}
                {{-- <li><img src="images/mainvisual3.png" alt=""></li> --}}
            </ul>
        </div>

        <section id="introduction" class="introduction">
            <span class="decoration fade-in-on-scroll">ABOUT US</span>
            <div class="introduction-wrapper">
                <div class="left-panel">
                    <h1 class="fade-in-on-scroll">MOVE IT.</h1>
                    <p class="description fade-in-on-scroll">動く力で、すべての人を笑顔へ。</p>
                    <p class="fade-in-on-scroll">つなぐ、動く、届ける。そしてすべての人を笑顔へと導く。</p>
                    <p class="fade-in-on-scroll">私たちMOVE ITは、あらゆる企業課題に対して行動を起こし、動く力で、笑顔を未来へつなぎます。</p>
                    <img class="introduction-image fade-in-on-scroll"
                        src="/images/image_01.png"
                        alt="">
                </div>
                <div class="right-panel fade-in-on-scroll">
                    <h2 class="fade-in-on-scroll">ABOUT US</h2>
                    <h3 class="fade-in-on-scroll">配送力 × サービス品質で唯一無二の存在へ</h3>
                    <p class="fade-in-on-scroll">MOVE ITは、迅速かつ確実な配送を通じて、お客様の信頼と満足を第一に考え、
                        日々の暮らしに大きな価値をお届けしています。</p>
                    <p class="fade-in-on-scroll">お客様視点に立ち、
                        最適な物流ソリューションでビジネスと生活を支えます。</p>
                </div>
            </div>
        </section>

        <section id="requirements" class="requirements">
            <span class="decoration fade-in-on-scroll">DRIVERS</span>
            <div class="requirements-wrapper">
                <div class="requirements-label fade-in-on-scroll">
                    <h2>求めるのはこんな方</h2>
                    <p class="description">MOVE ITはこんな方を求めています</p>
                </div>

                <div class="together">
                    <div class="left-index fade-in-on-scroll">
                        <a href="#item1" id="nav1">
                            <img src="/images/inexperienced.png" alt="ドライバー未経験の方">
                            <span>ドライバー未経験の方</span>
                        </a>
                        <a href="#item2" id="nav2">
                            <img src="/images/experienced.png" alt="配送ドライバーの方">
                            <span>現役配送ドライバーの方</span>
                        </a>
                    </div>

                    <div class="right-panel">
                        <div class="item" id="item1">
                            <h3 class="fade-in-on-scroll">ドライバー未経験の方</h3>
                            <p class="description fade-in-on-scroll">「やったことないけど、大丈夫かな？」<br>そんな不安も、しっかりサポートします！</p>
                            <p class="fade-in-on-scroll">軽貨物車（軽バンや軽トラック）の配送に興味がある方や、「運送業界は初めてだけど挑戦してみたい」という方にピッタリなのが、Move
                                Itのお仕事です！</p>
                            <p class="fade-in-on-scroll">
                                なぜなら、当社の優しい先輩方の教育が充実しているから。ただ荷物を運ぶだけじゃなく、「どうしたらお客さまに喜んでもらえるか？」を基本から学べます。</p>
                            <p class="fade-in-on-scroll">未経験からでも、プロとして自信を持って働けるようになります！
                                実際に、「配送は全く初めてだったけど、すぐに稼げるようになった！」というスタッフも。MOVE ITで、その夢を叶えてみませんか？</p>
                            <small class="fade-in-on-scroll">※年齢や経験は問いませんが、普通自動車免許（AT限定可）は必要です。</small>
                            </p>
                            <figure class="scrollin">
                                <img class="fade-in-on-scroll"
                                    src="/images/image_02.png" alt="ドライバー未経験の方">
                            </figure>
                        </div>
                        <div class="item" id="item2">
                            <h3 class="fade-in-on-scroll">配送ドライバーの方</h3>
                            <p class="description fade-in-on-scroll">今の働き方にモヤモヤしていませんか？<br>MOVE ITで理想の働き方を見つけよう！</p>
                            <p class="fade-in-on-scroll">
                                現配送・輸送のお仕事をしている方、「月によって収入がバラバラ…」「忙しすぎて生活が厳しい…」なんて悩んでいませんか？
                                Move
                                Itのサービスドライバーなら、そんなお悩みを解決できるかもしれません。
                            <p class="fade-in-on-scroll">
                                大手企業向けの安定した配送がメインだから、需要が安定していて収入も安心。さらに、お客さま満足を追求するスタイルなので、働きがいもやりがいもバッチリです。</p>
                            <p class="fade-in-on-scroll">独立開業を目指す方へのサポートも充実！自分のペースで仕事を進められる環境で、長く安心して働けます。</p>
                            <p class="fade-in-on-scroll">MOVE ITは、いつだってあなたの新しいスタートを全力で応援します！</p>
                            <figure class="scrollin">
                                <img class="fade-in-on-scroll"
                                    src="/images/image_03.png" alt="配送ドライバーの方">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="faq" class="faq">
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
                            <h3>軽貨物のお仕事はどんなことをしますか？</h3>
                        </div>
                        <p>主に軽貨物車（黒ナンバーの軽バンや軽トラック）での企業様、店舗様、個人様宅へ集配業務です。</p>
                        <p>企業様や店舗様へのルート配送案件もあれば、ランダムで個人様宅へ配送していただく案件もあります。中には長い距離を配送するチャーター配送など様々なお仕事があります。</p>
                        <p>ご自身のライフスタイルに合った働き方を見つけてみませんか？</p>
                    </div>
                </div>
            </div>

            <div class="container-right fade-in-on-scroll">
                <div class="left"></div>
                <div class="right">
                    <div class="content">
                        <div class="question-header">
                            <span>Q</span>
                            <h3>企業配送（定期配送）とは何ですか？</h3>
                        </div>
                        <p>店舗様や企業様へのルート配送のお仕事です。特定の日時とルートで、あらかじめ決まった場所に荷物を配送します。</p>
                        <p>ルート配送は早朝や夜間など様々な時間帯に行われ、月曜日～金曜日のみのお客様もいれば、土日・祝日のみのお客様もいらっしゃいます。</p>
                        <p>ご希望の曜日や時間帯での稼働が可能ですので、是非お問い合わせくださいませ。</p>
                    </div>
                </div>
            </div>

            <div class="container-left fade-in-on-scroll">
                <div class="left">
                    <div class="content">
                        <div class="question-header">
                            <span>Q</span>
                            <h3>業務委託ってどんな働き方？</h3>
                        </div>
                        <p>業務委託とは、運送会社や荷主からの仕事を、他の企業や個人が請け負う契約のことです。
                        <p>この形で働くドライバーは「委託ドライバー」と呼ばれ、運送会社の社員ではなく、個人事業主として働きます。</p>
                        委託ドライバーの魅力は、高い報酬を目指せることや自分のペースで働けることにあります。</p>
                        <p>ただし、委託ドライバーとしてスタートするには、「軽貨物車両や駐車場の用意」「軽貨物運送業の開業届の提出」「営業用の黒ナンバーの取得」等の準備が必要です。</p>
                        <p>MOVE ITでは、これらの手続きや準備をしっかりサポート！初めての方も安心してスタートできます。</p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="container-right fade-in-on-scroll">
                <div class="left"></div>
                <div class="right">
                    <div class="content">
                        <div class="question-header">
                            <span>Q</span>
                            <h3>その他の質問</h3>
                        </div>
                        <p>売り上げのシュミレーションを聞いてみたい！実際の経費はどのくらいかかるのか？具体的にどんなお仕事があるのか？黒ナンバーの取得方法を知りたい！等</p>
                        <p>どんな質問でもお気軽にお問い合わせくださいませ！</p>
                    </div>
                </div>
            </div>

        </section>

        <section id="recruit" class="recruit">
            <span class="decoration fade-in-on-scroll">RECRUIT</span>
            <div class="recruit-wrapper">
                <div class="recruit-label fade-in-on-scroll">
                    <h2>募集要項</h2>
                    <p class="description">MOVE ITで、軽貨物サービスNo.1を一緒に目指しませんか？</p>
                    <p>私たちMOVE ITは、独自の配送ネットワークと高品質なサービスを武器に、お客さまの期待を超える成果を追求しています。</p>
                    <p>これからも、より信頼される存在へ成長し、軽貨物輸送業界を盛り上げていきたいと考えています。「ただ荷物を運ぶだけ」じゃない、付加価値の高い配送を一緒に届けませんか？</p>
                    <p class="last">あなたもMOVE ITの仲間になって、新しい未来を作りましょう！</p>
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
                                未経験歓迎！20〜60代まで幅広く活躍できます。</td>
                        </tr>
                        <tr>
                            <th>雇用形態</th>
                            <td>業務委託</td>
                        </tr>
                        <tr>
                            <th>勤務地</th>
                            <td>東京都・千葉県・埼玉県・神奈川県など関東近郊</td>
                        </tr>
                        <tr>
                            <th>仕事内容</th>
                            <td>宅配業務、企業配送、企業専属便、スポット便</td>
                        </tr>
                        <tr>
                            <th>給与</th>
                            <td>完全歩合制<br>
                                ※歩合は個人の勤務度合い・個々の案件内容による<br>一人ひとりがご自分のペースで働いています。<br>
                                ※組み合わせ次第で月60万円以上の売り上げが可能です。</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td>一例 9:00～18:00<br>
                                1日4時間～OK！業務委託なので、ご自身の都合や希望の収入に合わせて、ご自身で勤務時間などを決められます。<br></td>
                        </tr>
                        <tr>
                            <th>休日・休暇</th>
                            <td>ご自身での予定に合わせて休日取得ができます。</td>
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

            <div class="company-wrapper" id="company">
                <div class="company-label fade-in-on-scroll">
                    <h2>会社概要</h2>
                </div>
                <table class="company-table fade-in-on-scroll">
                    <thead class="company-thead">
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody class="company-tbody">
                        <tr>
                            <th>会社名</th>
                            <td>MOVE IT</td>
                        </tr>
                        <tr>
                            <th>TEL</th>
                            <td>080-7427-2883</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒136-0076 東京都江東区南砂3-2-1</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>軽貨物の運送業務</td>
                        </tr>
                        <tr>
                            <th>代表取締役</th>
                            <td>阿部匠吾</td>
                        </tr>
                        <tr>
                            <th>会社設立</th>
                            <td>2024年12月1日</td>
                        </tr>
                    </tbody>
                    <tfoot class="company-tfoot">
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
                    if (rect.top <= windowHeight * 0.9) {
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
