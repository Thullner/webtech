<?php

session_start();

if (!isset($_SESSION['shoppingCart'])) {
    $_SESSION['shoppingCart'] = [];
}


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <title><?= $paginaNaam ?> - De Boekenwinkel</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="<?= $paginaBestandsNaam ?>">
