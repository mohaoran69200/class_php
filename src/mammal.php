<?php 
abstract class Mammal {
    protected string $furColor;

    public function __construct(string $furColor) {
        $this->furColor = $furColor;
    }

    public function getFurColor(): string {
        return $this->furColor;
    }

    public function setFurColor(string $furColor): void {
        $this->furColor = $furColor;
    }
}
