<?php

require_once 'highway.php';

class pedestrianWay extends HighWay {
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)
        {
            $this->CurrentVehicles[] = $vehicle;
        }
    }

}