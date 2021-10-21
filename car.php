<?php

require_once 'vehicle.php';
class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
}


