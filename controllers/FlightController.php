<?php


class FlightController
{

    public function actionView($flightId)
    {
        
        $flight = Flight::getFlightById($flightId);

        require_once(ROOT . '/views/flight/view.php');

        return true;
    }

}
