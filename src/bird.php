<?php

abstract class Bird {
    protected float $wingSpan;

    public function __construct(float $wingSpan) {
        $this->wingSpan = $wingSpan;
    }

    public function getWingSpan(): float {
        return $this->wingSpan;
    }

    public function setWingSpan(float $wingSpan): void {
        $this->wingSpan = $wingSpan;
    }
}
