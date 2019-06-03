<?php
$number = $_POST["input"];

?>
<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="input" placeholder="USD">
    <input type="submit" value="onclick">
    <?php echo $number * 23000 . " VND"; ?>
</form>
</body>
</html>
