<?php
require_once __DIR__ . "/classes/Ekans.php";
$ekans = new Ekans();
?>

<!DOCTYPE html>
<html>
<head>
    <title>PokéCare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <img src="assets/ekans.png" class="pokemon-icon">

    <h1>PokéCare</h1>

    <p><b>Nama:</b> <?= $ekans->getName(); ?></p>
    <p><b>Tipe:</b> <?= $ekans->getType(); ?></p>
    <p><b>Level:</b> <?= $ekans->getLevel(); ?></p>
    <p><b>HP:</b> <?= $ekans->getHp(); ?></p>
    <p><b>EXP:</b> <?= $ekans->getExp(); ?></p>
    <p><b>Jurus Spesial:</b> <?= $ekans->specialMove(); ?></p>

    <a class="btn" href="train.php">Mulai Latihan</a>
    <a class="btn" href="history.php">Riwayat Latihan</a>

</div>
</body>
</html>
