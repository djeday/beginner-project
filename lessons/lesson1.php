<?php

include 'classes/TableUtils.php';
?>
<!DOCTYPE  html>
<html lang="ru">
<head>
    <title>Beginner level</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<table>
    <tr>
        <?=TableUtils::renderTable();?>
    </tr>
 </table>
</body>
</html>