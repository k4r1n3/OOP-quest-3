<?php

require_once 'highway.php';

class motorWay extends HighWay {

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car)
        {
            $this->CurrentVehicles[] = $vehicle;
        }
    }
}