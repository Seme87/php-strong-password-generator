<?php
$_GET['name'];

var_dump($_GET);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <label for="numero-password">Numero della password</label>
       <input type="number" name="number" min="4" max="12" id="numero-password" required>
       <button type="submit">invia</button>
    </form>
</body>
</html>