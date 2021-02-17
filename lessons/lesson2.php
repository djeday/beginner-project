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
        <?php

            include 'classes/TableUtils.php';

            use Utils\TableUtils;

            echo TableUtils::renderTable(true);
        ?>
    </tr>
</table>
</body>
</html>