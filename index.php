<?php
require "game.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Blackjackie</title>
</head>
<body>
        <form  method="post">
            <button type="submit" name="refresh" class="btn btn-primary">refresh page!</button>
            <button type="submit" name="hit" value="1" class="btn btn-primary">Hit!</button>
            <button type="submit" name="stand" value="2" class="btn btn-primary">Stand!</button>
            <button type="submit" name="surrender" value="3" class="btn btn-primary">SURRENDER!</button>
        </form>
</body>
</html>

