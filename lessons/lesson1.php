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
        <td><?= TableUtils::getCells(1, 5); ?></td>
    </tr>
    <tr>
        <td><?= TableUtils::getCells(6, 10); ?></td>
    </tr>
 </table>
</body>
</html>