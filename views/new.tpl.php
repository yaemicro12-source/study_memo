<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>編集ページ</title>
</head>
<body>
<header>
<h1>編集</h1>
</header>
<main>
<form action="/new.php" method="post">
    <p>タイトルを入力してください</p>
    <textarea name='titel'></textarea>
    <p>カテゴリを選択してください</p>
    <select name="cate" id="cate">
        <option value="">-- カテゴリ--</option>
        <option value="apple">php</option>
        <option value="banana">eloquent</option>
        <option value="orange">laravel</option>
    </select>
    <p>解説内容を入力してください</p>
    <textarea name='content'></textarea>
    <p>メモがあれば入力してください</p>
    <textarea name='memo'></textarea>
    <p>参考ページを入力してください</p>
    <textarea name='src'></textarea>
    <input type="submit" value="送信">
</form>
</main>
<footer>
<p>フッター情報</p>
</footer>
</body>
</html>