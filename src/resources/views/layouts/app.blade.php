<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Contact Form')</title> <!-- 各ページで異なるタイトルを指定可能 -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&family=Zen+Maru+Gothic&display=swap"
        rel="stylesheet">
    <!-- 各ページで追加のCSSを読み込む -->
    @stack('css')
</head>

<body>
    <header id="header" class="header">
        <div class="header-wrapper">
            <a href="#" class="instagram-icon"><img src="images/instagram.svg" alt=""></a>
            <a href="#" class="inquiry-icon"><img src="images/inquiry.svg" alt=""></a>
            <a href="#" class="floating-btn">お問い合わせ・ご応募</a>
            <a href=""><img src="images/logo.svg" alt=""></a>
            {{-- <h1>Delivering Smiles.</h1> --}}
            {{-- <p>Delivering Smiles.</p> --}}
            <div class="toggle_btn">☰</div>
            <div id="mask">
                <button id="close_btn" class="close_btn">×</button>
                <nav id="navi" class="nav-wrapper">
                    <ul class="menu">
                        <li class="menu_item"><a href="#introduction">Move Itとは</a></li>
                        <li class="menu_item"><a href="#requirements">求めるのはこんな方</a></li>
                        <li class="menu_item"><a href="#faq">よくある質問</a></li>
                    </ul>
                    <ul class="inquiry">
                        <li class="menu_item"><a href="#company">会社概要</a></li>
                        <li class="menu_item"><a href="#recruit">募集要項</a></li>
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
                    <li><a href="#">会社概要</a></li>
                    <li><a href="#">採用情報</a></li>
                </ul>
            </li>
            <li class="item">
                <p class="title">Move Itについて</p>
                <ul class="footer-menu">
                    <li><a href="#">よくある質問</a></li>
                    <li><a href="#">プライバシーポリシー</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                </ul>
            </li>
        </ul>
        <p class="copyright">&copy; Move It</p>
    </footer>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.querySelector('.toggle_btn');
        const mask = document.getElementById('mask');
        const closeBtn = document.getElementById('close_btn');
        const menuItems = document.querySelectorAll('.menu_item'); // メニューアイテムを選択

        // ハンバーガーメニューを開く
        toggleBtn.addEventListener('click', function() {
            mask.classList.add('open');
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
