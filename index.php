<?php

    $number_password = $_GET['number'];
    $int= (int)$number_password;
    var_dump($int);

    // var_dump($number_password);

    function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789&%&£";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $int ; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

echo randomPassword();

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