<?php
class Module {
    private $id;
    private $naam;

    public function __construct(int $id, string $naam) {
        $this->id = $id;
        $this->naam = $naam;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNaam(): string {
        return $this->naam;
    }
}
?>
