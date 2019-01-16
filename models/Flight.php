<?php

class Flight
{

    const SHOW_BY_DEFAULT = 4; ///ППРИДУМАТЬ АЛЬТЕРНАТИВУ АБО ВИКИНУТИ

    public static function getFlights($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $flightsList = [];

        $result = $db->query('SELECT id, fly_type, price, image, short_desc, full_desc FROM flights '
                . 'ORDER BY id DESC '                
                . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $flightsList[$i]['id'] = $row['id'];
            $flightsList[$i]['fly_type'] = $row['fly_type'];
            $flightsList[$i]['image'] = $row['image'];
            $flightsList[$i]['price'] = $row['price'];
            $flightsList[$i]['short_desc'] = $row['short_desc'];
            // $flightsList[$i]['full_desc'] = $row['full_desc'];
            $i++;
        }

        return $flightsList;
    }
    
    
// new method to get
    public static function getFlightsZone($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $flightsZoneList = [];

        $result = $db->query('SELECT id, title, short_desc, image, article FROM  locations '
                . 'ORDER BY id DESC '                
                . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $flightsZoneList[$i]['id'] = $row['id'];
            $flightsZoneList[$i]['title'] = $row['title'];
            $flightsZoneList[$i]['image'] = $row['image'];
            $flightsZoneList[$i]['short_desc'] = $row['short_desc'];
            $flightsZoneList[$i]['article'] = $row['article'];
            
            $i++;
        }

        return $flightsZoneList;
    }

    
    /**
     * Returns flight item by id
     * @param integer $id
     */
    public static function getFlightById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM flights WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }

// new method to get
    public static function getFlightZoneById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM locations WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }
    
    








}