<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script</title>
</head>
<body>
    <h4>Początek strony</h4>
    <?php
        // require, require once, include, include_once
        include "./skrypty/list.php";
        include_once "./skrypty/list.php";

        echo "<br>Require<br>";
        require "./skrypty/list.php";

        @require "./skrypty/list1.php";
    ?>
    <h4>Koniec strony</h4>
</body>
</html>