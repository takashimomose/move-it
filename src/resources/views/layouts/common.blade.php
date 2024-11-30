<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Contact Form')</title> <!-- 各ページで異なるタイトルを指定可能 -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <style>
        /* デフォルトの画像 */
        .responsive-logo {
            content: url("{{ asset('images/logo.svg') }}");
        }

        /* 画面幅が1110px以下の場合に切り替え */
        @media (max-wclassth: 1110px) {
            .responsive-logo {
                content: url("{{ asset('images/logo-tablet.svg') }}");
            }
        }
    </style>

    <!-- 各ページで追加のCSSを読み込む -->
    @stack('css')
</head>

<body>
    <header class="header">
        <div class="header-wrapper">
            <h1 class="logo">
                <a href=""><img src="images/logo.svg" alt="Web Entertainment Design"></a>
            </h1>
            <nav>
                <ul>
                    <li><a href="#">Move Itとは</a></li>
                    <li><a href="#">求めるのはこんな方</a></li>
                    <li><a href="#">よくある質問</a></li>
                    <li><a href="#">募集要項</a></li>
                    <li><a href="#">会社概要</a></li>
                </ul>
            </nav>
        </div>
        <a class="contact" href="#">お問い合わせ</a>
    </header>
    @yield('content') <!-- ここに各ページのコンテンツが挿入されます -->
    <!-- フッター -->
    <footer class="footer">
        <ul class="footer-wrapper">
            <li class="item">
                <p class="title">会社情報</p>
                <ul class="menu">
                    <li><a href="#">会社概要</a></li>
                    <li><a href="#">採用情報</a></li>
                </ul>
            </li>
            <li class="item">
                <p class="title">Move Itについて</p>
                <ul class="menu">
                    <li><a href="#">よくあるご質問</a></li>
                    <li><a href="#">プライバシーポリシー</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                </ul>
            </li>
        </ul>
        <p class="copyright">&copy; Move It</p>
    </footer>
</body>

</html>
