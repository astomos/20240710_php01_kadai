<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケート課題</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1>ご登録結果</h1>
    <table>
        <tr>
            <th>お名前（漢字）</th>
            <th>お名前(カナ)</th>
            <th>性別</th>
            <th>ご年齢</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>ご趣味</th>
        </tr>

        <?php
        require_once 'functions.php';
        $data = [];
        if (($file = fopen('./data/data.csv', 'r')) !== FALSE) {
            while (($row = fgetcsv($file)) !== FALSE) {
                $data[] = $row;
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>" . h($cell) . "</td>";
                }
                echo "</tr>";
            }
            fclose($file);
        }
?>
    </table>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>
</html>









