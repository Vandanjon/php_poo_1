<?php

Class Car {
    private int $nbWheels=4;
    private int $currentSpeed=0;
    private string $color="white";
    private int $nbSeats=1;
    private string $energy="gasoil";
    private int $energyLevel=100;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

// METHODS
public function start(): string {
    $this->currentSpeed = 0;

    return "Ignition" . "<br/>";
}

public function forward(): string {
    $this->currentSpeed += 5;
    
    return "Onward! Current speed is : " . $this->currentSpeed . " km/h" . "<br/>";
}

public function brake(): string {
    $this->currentSpeed = 0;
    
    return "Stop it now" . "<br/>";
}


// GETTERS
public function getNbWheels(): int {
    return $this->nbWheels;
}
public function getCurrentSpeed(): int {
    return $this->currentSpeed;
}
public function getColor(): string {
    return $this->color;
}
public function getNbSeats(): int {
    return $this->nbSeats;
}
public function getEnergy(): string {
    return $this->energy;
}
public function getEnergyLevel(): int {
    return $this->energyLevel;
}

// SETTERS
public function setNbWheels(int $nbWheels): void {
    $this->nbWheels = $nbWheels;
}
public function setCurrentSpeed(int $currentSpeed): void {
    $this->currentSpeed = $currentSpeed;
}
public function setColor(string $color): void {
    $this->color = $color;
}
public function setNbSeats(int $nbSeats): void {
    $this->nbSeats= $nbSeats;
}
public function setEnergy(string $energy): void {
    $this->energy = $energy;
}
public function setEnergyLevel(int $energyLevel): void {
    $this->energyLevel = $energyLevel;
}

}