<?php
require_once __DIR__ . "/classes/Ekans.php";

class Trainer {

    private Pokemon $pokemon;
    private string $historyFile;

    public function __construct(Pokemon $pokemon) {
        $this->pokemon = $pokemon;
        $this->historyFile = __DIR__ . "/history.json";

        if (!file_exists($this->historyFile)) {
            file_put_contents($this->historyFile, json_encode([]));
        }
    }

    public function saveTraining(
        string $jenis, int $intensitas,
        int $beforeLevel, int $afterLevel,
        int $beforeHP, int $afterHP
    ) {
        $data = json_decode(file_get_contents($this->historyFile), true);

        $data[] = [
            "jenis" => $jenis,
            "intensitas" => $intensitas,
            "beforeLevel" => $beforeLevel,
            "afterLevel" => $afterLevel,
            "beforeHP" => $beforeHP,
            "afterHP" => $afterHP,
            "time" => date("Y-m-d H:i:s")
        ];

        file_put_contents($this->historyFile, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function getHistory(): array {
        return json_decode(file_get_contents($this->historyFile), true);
    }

    public function getPokemon(): Pokemon {
        return $this->pokemon;
    }
}

$ekans = new Ekans();
$trainer = new Trainer($ekans);
