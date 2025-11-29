<?php
require_once __DIR__ . "/Pokemon.php";

class Ekans extends Pokemon {
    public function __construct() {
        parent::__construct("Ekans", "Poison", 5, 30);
    }

    public function specialMove(): string {
        return "Poison Tail — Serangan ekor racun yang dapat meracuni musuh.";
    }
}
