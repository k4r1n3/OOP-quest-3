<?php

require_once 'highway.php';

class residentialWay extends HighWay {
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car)
        {
            $this->CurrentVehicles[] = $vehicle;
        }
    }

}