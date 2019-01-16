<?php

// include_once ROOT.'/models/Flight.php';

class MainController
{
    public function actionIndex()
    {

        $balloonFlights = [];
        $balloonFlights = Flight::getFlights(4);



         $flightsLocations = [];
         $flightsLocations = Flight::getFlightsZone(5);


        require_once(ROOT . '/views/main/index.php');

        return true;
    }


		
}