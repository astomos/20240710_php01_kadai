<head>
    <meta charset="utf-8">
    <title>アンケート課題</title>
</head>

<body>

<?php
require_once 'functions.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name1 = h($_POST['name1']);
    $name2 = h($_POST['name2']);
    $sex = h($_POST['sex']);
    $age = h($_POST['age']);
    $email = h($_POST['email']);
    $phonenumber = h($_POST['phonenumber']);
    $hobby = h($_POST['hobby']);

    $file = fopen("./data/data.csv", "a");    // ファイル読み込み
    $data = [$name1, $name2, $sex, $age, $email, $phonenumber, $hobby];
    fputcsv($file, $data);
    fclose($file);

    echo "<a href='read.php'>データを表示する</a>";
}
?>

</body>
</html>