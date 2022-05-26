<?php
include_once('Application.php');

class Carriers extends Application
{
    private $sql = array(
        'allCarriers' => 'select * from carriers'
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function getCarriers(): array
    {
        return $this->getResultList($this->sql['allCarriers']);
    }
}