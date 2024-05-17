<?php
require_once __DIR__ . '/Mammal.php';

final class Dog extends Mammal {
    private string $breed;

    public function __construct(string $furColor, string $breed) {
        parent::__construct($furColor);
        $this->breed = $breed;
    }

    public function getBreed(): string {
        return $this->breed;
    }

    public function setBreed(string $breed): void {
        $this->breed = $breed;
    }

    public function bark(): string {
        return ""; 
    }
}

