<?php
class Pokemon {
    protected string $name;
    protected string $type;
    protected int $level;
    protected int $hp;
    protected int $exp;

    public function __construct($name, $type, $level, $hp) {
        $this->name = $name;
        $this->type = $type;
        $this->level = $level;
        $this->hp = $hp;
        $this->exp = 0;
    }

    public function getName() { return $this->name; }
    public function getType() { return $this->type; }
    public function getLevel() { return $this->level; }
    public function getHp() { return $this->hp; }
    public function getExp() { return $this->exp; }

    public function specialMove() {
        return "No special move defined.";
    }

    public function train($type, $intensity) {
        $before = [
            "level" => $this->level,
            "hp" => $this->hp,
            "exp" => $this->exp
        ];

        $this->exp += $intensity;

        while ($this->exp >= 100) {
            $this->exp -= 100;
            $this->level += 1;
            $this->hp += 5;
        }

        return $before;
    }
}
