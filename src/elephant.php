<?php

class Elephant extends Mammal {
    private float $tuskLength;

    public function __construct(float $tuskLength) {
        $this->tuskLength = $tuskLength;
    }

    public function getTuskLength(): float {
        return $this->tuskLength;
    }

    public function setTuskLength(float $tuskLength): void {
        $this->tuskLength = $tuskLength;
    }

    public function trumpet(): string {
        return ""; 
    }
}

