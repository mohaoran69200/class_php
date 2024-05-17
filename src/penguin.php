<?php
require_once __DIR__ . '/Bird.php';

final class Penguin extends Bird {
    private float $swimSpeed;

    public function __construct(float $wingSpan, float $swimSpeed) {
        parent::__construct($wingSpan);
        $this->swimSpeed = $swimSpeed;
    }

    public function getSwimSpeed(): float {
        return $this->swimSpeed;
    }

    public function setSwimSpeed(float $swimSpeed): void {
        $this->swimSpeed = $swimSpeed;
    }

    public function swim(): string {
        return ""; 
    }
}
