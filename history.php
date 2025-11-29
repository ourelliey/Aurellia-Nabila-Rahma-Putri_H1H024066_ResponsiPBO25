<?php
$historyFile = "history.json";
$raw = @file_get_contents($historyFile);
$history = json_decode($raw, true);

if (!is_array($history)) {
    $history = [];
}

function safe($array, $key, $default = "—") {
    return isset($array[$key]) ? htmlspecialchars($array[$key]) : $default;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Latihan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Riwayat Latihan</h1>

    <?php if (empty($history)): ?>
        <p>Belum ada riwayat latihan.</p>
    <?php else: ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>Tipe</th>
            <th>Jenis</th>
            <th>Intensitas</th>
            <th>Level</th>
            <th>HP</th>
            <th>EXP</th>
            <th>Waktu</th>
        </tr>

        <?php foreach ($history as $h): ?>
        <tr>
            <td><?= safe($h, "nama"); ?></td>
            <td><?= safe($h, "type"); ?></td>
            <td><?= safe($h, "jenis"); ?></td>
            <td><?= safe($h, "intensitas"); ?></td>

            <td><?= safe($h, "level_before") . " → " . safe($h, "level_after"); ?></td>
            <td><?= safe($h, "hp_before") . " → " . safe($h, "hp_after"); ?></td>
            <td><?= safe($h, "exp_before") . " → " . safe($h, "exp_after"); ?></td>

            <td><?= safe($h, "waktu"); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <a class="btn" href="index.php">Kembali</a>
</div>

</body>
</html>
