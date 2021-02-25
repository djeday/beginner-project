<!DOCTYPE  html>
<html lang="ru">
<head>
    <title>Beginner level</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<p>
<?php

include 'classes/StringLib.php';

use Utils\StringLib;

$result = 'Вы не ввели текст!';
$string = $_POST['string'];

if (isset($string) && !empty($_POST['string'])) {
        $text = trim($_POST['string']);
        $reverseText = StringLib::mbReverseString($text);
        $result = $reverseText;
}

echo $result;
?>
</p>
<a href="lesson3.php">Назад</a>
</body>
</html>