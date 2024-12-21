<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせのお知らせ</title>
</head>
<body>
    <h1>お問い合わせ内容</h1>
    <p>送信日時: {{ $contactData['send_date'] }}</p>
    <p>お名前: {{ $contactData['name'] }}</p>
    <p>フリガナ: {{ $contactData['name_kana'] }}</p>
    <p>郵便番号: {{ $contactData['postal_code'] }}</p>
    <p>住所: {{ $contactData['address'] }}</p>
    <p>電話番号: {{ $contactData['tel'] }}</p>
    <p>メールアドレス: {{ $contactData['email'] }}</p>
    <p>メッセージ:</p>
    <p>{{ $contactData['message'] }}</p>
    <p>※本メールはMOVE ITのお問い合わせフォームから送信されました。</p>
</body>
</html>