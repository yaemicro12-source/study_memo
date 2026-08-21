<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>解説ページ</title>
</head>
<body>
<header>
<h1><?=$titel?></h1>
</header>
<main>
<p>解説</p>
<p><?=$content?></p>

<p>メモ</p>
<form action="/info.php" method="post">
   <form >
    <textarea name='memo'></textarea>
    <input type="submit" value="送信">
</form>
<p><?=$memo?>
</main>
<footer>
<p>フッター情報</p>
</footer>
</body>
</html>