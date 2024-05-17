<?php
require_once __DIR__ . '/Bird.php';

class Eagle extends Bird {
    private float $flightSpeed;

    public function __construct(float $wingSpan, float $flightSpeed) {
        parent::__construct($wingSpan);
        $this->flightSpeed = $flightSpeed;
    }

    public function getFlightSpeed(): float {
        return $this->flightSpeed;
    }

    public function setFlightSpeed(float $flightSpeed): void {
        $this->flightSpeed = $flightSpeed;
    }

    public function hunt(): string {
        return ""; 
    }
}
