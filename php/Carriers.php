<?php
include_once('Application.php');

class Carriers extends Application
{
    private $sql = array(
        'allCarriers' => 'select * from carriers',
        'getName' => 'select name from carriers where id = {id}',
        'OsszesJarat' => 'SELECT carriers.name, SUM(flights.arr_flights) AS `osszesjarat` FROM airports_carrier INNER JOIN carriers ON airports_carrier.carrier_id = carriers.id INNER JOIN flights ON flights.airport_carriers_id = airports_carrier.id where carriers.id = {id} GROUP BY carriers.name',
        'TJA' => 'SELECT carriers.name, SUM(flights.arr_cancelled) / SUM(flights.arr_flights) * 100 AS "torolt_jaratok_aranya" FROM airports_carrier INNER JOIN carriers ON airports_carrier.carrier_id = carriers.id INNER JOIN flights on flights.airport_carriers_id = airports_carrier.id where carriers.id = {id} GROUP BY carriers.name',
        'dalay' => 'SELECT carriers.name, SUM(flights.arr_delay) / SUM(flights.arr_flights) AS Delay FROM airports_carrier INNER JOIN carriers ON airports_carrier.carrier_id = carriers.id INNER JOIN flights ON flights.airport_carriers_id = airports_carrier.id where carriers.id = {id} GROUP BY carriers.id, carriers.name',
        'jaratokszama' => 'SELECT carriers.name, COUNT(airports_carrier.id) AS db FROM airports_carrier INNER JOIN carriers ON airports_carrier.carrier_id = carriers.id where carriers.id = {id} GROUP BY carriers.name',
        'max_code' => 'SELECT name, (SELECT airports.code FROM airports_carrier INNER JOIN airports ON airports_carrier.airport_id = airports.id INNER JOIN flights ON flights.airport_carriers_id = airports_carrier.id WHERE airports_carrier.carrier_id = carriers.id GROUP BY airports_carrier.carrier_id, airports.code ORDER BY SUM(flights.arr_flights) DESC LIMIT 1) AS "max_code" FROM carriers where id = {id}',
        'imgId' => 'select * from carriers where id = {id}',
        'repterek' => 'select a.name, a.code, SUM(f.arr_flights) as OsszesJarat from airports_carrier ac inner join airports a on ac.airport_id = a.id inner join flights f on ac.id = f.airport_carriers_id group by a.name order by OsszesJarat desc limit 3;'
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function getCarriers(): array
    {
        return $this->getResultList($this->sql['allCarriers']);
    }

    public function osszesjarat($carrierId): array
    {
        if (!$this->isValidId($carrierId))
        {
            return array();
        }
        $params = array(
            '{id}' => $carrierId
        );
        return $this->getResultList(strtr($this->sql['OsszesJarat'], $params));
    }

    public function getName($carrierId): array
    {
        if (!$this->isValidId($carrierId))
        {
            return array();
        }
        $params = array(
            '{id}' => $carrierId
        );
        return $this->getResultList(strtr($this->sql['getName'], $params));
    }

    public function toroltjaratokaranya($carrierId): array
    {
        if (!$this->isValidId($carrierId))
        {
            return array();
        }
        $params = array(
            '{id}' => $carrierId
        );
        return $this->getResultList(strtr($this->sql['TJA'], $params));
    }

    public function getDelay($carrierId): array
    {
        if (!$this->isValidId($carrierId))
        {
            return array();
        }
        $params = array(
            '{id}' => $carrierId
        );
        return $this->getResultList(strtr($this->sql['dalay'], $params));
    }

    public function jaratokszama($carrierId): array
    {
        if (!$this->isValidId($carrierId))
        {
            return array();
        }
        $params = array(
            '{id}' => $carrierId
        );
        return $this->getResultList(strtr($this->sql['jaratokszama'], $params));
    }

    public function getMaxCode($carrierId): array
    {
        if (!$this->isValidId($carrierId))
        {
            return array();
        }
        $params = array(
            '{id}' => $carrierId
        );
        return $this->getResultList(strtr($this->sql['max_code'], $params));
    }

    public function getImgId($carrierId): array
    {
        if (!$this->isValidId($carrierId))
        {
            return array();
        }
        $params = array(
            '{id}' => $carrierId
        );
        return $this->getResultList(strtr($this->sql['imgId'], $params));
    }

    public function repterek(): array
    {
        return $this->getResultList($this->sql['repterek']);
    }
}