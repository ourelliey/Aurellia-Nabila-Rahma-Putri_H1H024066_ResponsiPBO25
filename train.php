<?php
require_once __DIR__ . "/classes/Ekans.php";
$ekans = new Ekans();

$result = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis = $_POST["jenis"];
    $intensitas = intval($_POST["intensitas"]);

    $before = $ekans->train($jenis, $intensitas);

    $result = [
        "nama" => $ekans->getName(),
        "type" => $ekans->getType(),
        "jenis" => $jenis,
        "intensitas" => $intensitas,
        "level_before" => $before["level"],
        "level_after" => $ekans->getLevel(),
        "hp_before" => $before["hp"],
        "hp_after" => $ekans->getHp(),
        "exp_before" => $before["exp"],
        "exp_after" => $ekans->getExp(),
        "waktu" => date("Y-m-d H:i:s")
    ];

    $history = json_decode(file_get_contents("history.json"), true);
    $history[] = $result;
    file_put_contents("history.json", json_encode($history, JSON_PRETTY_PRINT));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Pokémon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <img src="assets/ekans.png" class="pokemon-icon">
    <h1>Latihan Pokémon</h1>

    <form method="POST">
        <label>Jenis Latihan:</label>
        <select name="jenis" required>
            <option value="Attack">Attack</option>
            <option value="Defense">Defense</option>
            <option value="Speed">Speed</option>
        </select>

        <label>Intensitas:</label>
        <input type="number" name="intensitas" min="10" required>

        <button type="submit">Latihan!</button>
    </form>

    <?php if ($result): ?>
    <div class="result">
        <h3>Hasil Latihan</h3>
        <p><b>Nama:</b> <?= $result["nama"]; ?></p>
        <p><b>Tipe:</b> <?= $result["type"]; ?></p>
        <p><b>INTENSITAS:</b> <?= $result["intensitas"]; ?></p>
        <p><b>Level:</b> <?= $result["level_before"]; ?> → <?= $result["level_after"]; ?></p>
        <p><b>HP:</b> <?= $result["hp_before"]; ?> → <?= $result["hp_after"]; ?></p>
        <p><b>EXP:</b> <?= $result["exp_before"]; ?> → <?= $result["exp_after"]; ?></p>
        <p><b>Jurus Spesial:</b> <?= $ekans->specialMove(); ?></p>
    </div>
    <?php endif; ?>

    <a class="btn" href="index.php">Kembali</a>
    <a class="btn" href="history.php">Riwayat</a>

</div>
</body>
</html>
