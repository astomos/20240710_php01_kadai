<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケート課題</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <h1>確認フォーム</h1>
    <form method="post" action="write.php">
        <label for="name1">お名前（漢字）</label>
        <input type="text" id="name1" name="name1" required><br>
        <label for="name2">お名前(カナ)</label>
        <input type="text" id="name2" name="name2" required><br>
        <label for="sex">性別</label><br>
        <label for="male">男</label><br>
        <input type="radio" id="male" name="sex" value="男"><br>
        <label for="female">女</label><br>
        <input type="radio" id="female" name="sex" value="女"><br>
        <label for="age">ご年齢</label>
        <input type="text" id="age" name="age" required><br>
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" required><br>
        <label for="phonenumber">電話番号</label>
        <input type="text" id="phonenumber" name="phonenumber" required><br>
        <label for="hobby">ご趣味</label>
        <select name="hobby" id="hobby" required>
            <option value="読書">読書</option>
            <option value="ゲーム">ゲーム</option>
            <option value="音楽鑑賞">音楽鑑賞</option>
            <option value="アウトドア">アウトドア</option>
        </select><br>
        <input type="submit" id="submit" value="送信">
    </form>
</div>
</body>
</html>