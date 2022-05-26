<?php

class Application
{
    private $db = array(
        'servername' => 'localhost',
        'username' => 'root',
        'password' => 'Passw123',
        'dbname' => 'airline'
    );

    private $connecion;
    private $connecionLive;

    public function __construct()
    {
        $this->dbConnect();
    }

    private function dbConnect()
    {
        $this->connecion = new mysqli($this->db['servername'], $this->db['username'], $this->db['password'], $this->db['dbname']);
        if ($this->connecion->connect_error)
        {
            $this->connecionLive = false;
            die('Connection failed: '.$this->connecion->connect_error);
        }
        $this->connecionLive = true;
    }

    protected function getResultList($sql): array
    {
        $resultList = array();
        $result = $this->connecion->query($sql);
        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $resultList[] = $row;
            }
        }
        else
        {
            $this->writeLog('Nem talált értéket a lekérdezés', $sql);
        }
        return $resultList;
    }

    protected function writeLog($str, $sql)
    {

    }
}