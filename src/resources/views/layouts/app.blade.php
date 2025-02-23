<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Contact Form')</title> <!-- 各ページで異なるタイトルを指定可能 -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&family=Zen+Maru+Gothic&display=swap"
        rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CM1MZJMRNM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CM1MZJMRNM');
    </script>
    @stack('css')
</head>

<body>
    <header id="header" class="header">
        <div class="header-wrapper">
            <a href="https://x.com/moveit2025" class="x-icon"><img src="{{ asset('images/x.svg') }}" alt=""></a>
            <a href="{{ route('contact.show') }}" class="inquiry-icon"><img src="{{ asset('images/inquiry.svg') }}"
                    alt=""></a>
            <a href="{{ route('contact.show') }}" class="floating-btn">お問い合わせ・ご応募</a>
            <a href="{{ route('index') }}"><img class="logo" src="{{ asset('images/logo.svg') }}" alt=""></a>
            {{-- <h1>Delivering Smiles.</h1> --}}
            {{-- <p>Delivering Smiles.</p> --}}
            <div class="toggle_btn">☰</div>
            <div id="mask">
                <button id="close_btn" class="close_btn">×</button>
                <nav id="navi" class="nav-wrapper">
                    <ul class="menu">
                        <li class="menu_item"><a href="{{ route('index') }}#introduction">MOVE ITとは</a></li>
                        <li class="menu_item"><a href="{{ route('index') }}#requirements">求めるのはこんな方</a></li>
                        <li class="menu_item"><a href="{{ route('index') }}#faq">よくある質問</a></li>
                    </ul>
                    <ul class="inquiry">
                        <li class="menu_item"><a href="{{ route('ceo.show') }}">代表挨拶</a></li>
                        <li class="menu_item"><a href="{{ route('index') }}#company">会社概要</a></li>
                        <li class="menu_item"><a href="{{ route('index') }}#recruit">募集要項</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <header id="header" class="header-scrolled">
        <div class="header-wrapper">
            <a href="{{ route('index') }}" class="logo-text"><img src="{{ asset('images/logo_02.svg') }}"
                    alt="logo"></a>
            <div class="toggle_btn">☰</div>
            <div id="mask">
                <button id="close_btn" class="close_btn">×</button>
                <nav id="navi" class="nav-wrapper">
                    <ul class="menu">
                        <li class="menu_item"><a href="{{ route('index') }}#introduction">MOVE ITとは</a></li>
                        <li class="menu_item"><a href="{{ route('index') }}#requirements">求めるのはこんな方</a></li>
                        <li class="menu_item"><a href="{{ route('index') }}#faq">よくある質問</a></li>
                    </ul>
                    <ul class="inquiry">
                        <li class="menu_item"><a href="{{ route('ceo.show') }}">代表挨拶</a></li>
                        <li class="menu_item"><a href="{{ route('index') }}#company">会社概要</a></li>
                        <li class="menu_item"><a href="{{ route('index') }}#recruit">募集要項</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    @yield('content') <!-- ここに各ページのコンテンツが挿入されます -->
    <!-- フッター -->
    <footer class="footer">
        <ul class="footer-wrapper">
            <li class="item">
                <p class="title">会社情報</p>
                <ul class="footer-menu">
                    <li><a href="{{ route('index') }}#company">会社概要</a></li>
                    <li><a href="{{ route('index') }}#recruit">募集要項</a></li>
                </ul>
            </li>
            <li class="item">
                <p class="title">MOVE ITについて</p>
                <ul class="footer-menu">
                    <li><a href="{{ route('index') }}#faq">よくある質問</a></li>
                    <li><a href="{{ route('contact.show') }}">お問い合わせ・ご応募</a></li>
                </ul>
            </li>
        </ul>
        <a href="#" class="pagetop" id="scrollToTopButton"><img src={{ asset('images/arrow.svg') }}
                alt=""></a>
        <a href="https://x.com/moveit2025" class="x-white"><img src={{ asset('images/x_white.svg') }}
            alt=""></a>
        <p class="copyright">&copy; MOVE IT</p>
    </footer>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const headerScrolled = document.querySelector('.header-scrolled');
        const scrollThreshold = 50; // クラスを切り替えるスクロール量（px）

        // 初期状態では header-scrolled を非表示
        headerScrolled.style.visibility = 'hidden';

        window.addEventListener('scroll', function() {
            if (window.scrollY > scrollThreshold) {
                headerScrolled.style.visibility = 'visible'; // スクロールすると表示
                headerScrolled.style.opacity = '1'; // フェードイン効果用（必要なら）
            } else {
                headerScrolled.style.visibility = 'hidden'; // 最上部では非表示
                headerScrolled.style.opacity = '0'; // フェードアウト効果用（必要なら）
            }
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtns = document.querySelectorAll('.toggle_btn'); // 全てのtoggle_btnを取得
        const mask = document.getElementById('mask');
        const closeBtn = document.getElementById('close_btn');
        const menuItems = document.querySelectorAll('.menu_item'); // メニューアイテムを選択

        // ハンバーガーメニューを開く
        toggleBtns.forEach(function(toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                mask.classList.add('open');
            });
        });

        // 閉じるボタンを押すと閉じる
        closeBtn.addEventListener('click', function() {
            mask.classList.remove('open');
        });

        // 背景をクリックしても閉じる
        mask.addEventListener('click', function(e) {
            if (e.target === mask) {
                mask.classList.remove('open');
            }
        });

        // メニューアイテムをクリックしても閉じる
        menuItems.forEach(function(item) {
            item.addEventListener('click', function() {
                mask.classList.remove('open');
            });
        });
    });
</script>

<script>
    // スムーズスクロールの動作
    document.querySelectorAll('.scroll-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // デフォルトのアンカーリンク動作を無効化
            const targetId = this.getAttribute('href').substring(1); // #を除いたidを取得
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop, // ターゲットの位置
                    behavior: 'smooth' // スムーズスクロール
                });
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scrollToTopButton = document.getElementById('scrollToTopButton');

        // 初期状態で非表示
        scrollToTopButton.style.display = 'none';

        // ページをスクロールするとボタンを表示/非表示
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                scrollToTopButton.style.display = 'block';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });

        // ボタンをクリックしたときに最上部までスムーズにスクロール
        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>
