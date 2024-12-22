<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせのお知らせ</title>
</head>

<body>
    <h1>お問い合わせ内容</h1>
    <ul>
        <li>送信日時: {{ $contactData['send_date'] }}</li>
        <li>お名前: {{ $contactData['name'] }}</li>
        <li>フリガナ: {{ $contactData['name_kana'] }}</li>
        <li>郵便番号: {{ $contactData['postal_code'] }}</li>
        <li>住所: {{ $contactData['address'] }}</li>
        <li>電話番号: {{ $contactData['tel'] }}</li>
        <li>メールアドレス: {{ $contactData['email'] }}</li>
        <li>お問い合わせ内容:</li>
        <p>{{ $contactData['message'] }}</p>
    </ul>

    <p>※本メールはMOVE ITのお問い合わせフォームから送信されました。</p>
</body>

</html>
