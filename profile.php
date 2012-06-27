<?php

include_once 'spawner.php';

class Profile {

    private $guid;
    private $created;
    private $topBlue;
    private $bottomBlue;
    private $topRed;
    private $bottomRed;
    private $dragon;
    private $baron;

    function __construct() {
        $this->topBlue = new Spawner("Top Blue");
        $this->bottomBlue = new Spawner("Bottom Blue");

        $this->topRed = new Spawner("Top Red");
        $this->bottomRed = new Spawner("Bottom Red");

        $this->dragon = new Spawner("Dragon");
        $this->baron = new Spawner("Baron");


        $this->guid = uniqid();
        $this->created = date("U");
    }

    public function startTopBlue() {
        $this->topBlue->startTimer(5 * 60);
    }
    
    public function getTopBlue() {
        return $this->topBlue->getTime();
    }

    public function startBottomBlue() {
        $this->bottomBlue->startTimer(5 * 60);
    }
    
    public function getBottomBlue() {
        return $this->bottomBlue->getTime();
    }

    public function startTopRed() {
        $this->topRed->startTimer(5 * 60);
    }
    
    public function getTopRed() {
        return $this->topRed->getTime();
    }

    public function startBottomRed() {
        $this->bottomRed->startTimer(5 * 60);
    }
    
    public function getBottomRed() {
        return $this->bottomRed->getTime();
    }

    public function startDragon() {
        $this->dragon->startTimer(6 * 60);
    }
    
    public function getDragon() {
        return $this->dragon->getTime();
    }

    public function startBaron() {
        $this->baron->startTimer(7 * 60);
    }
    
    public function getBaron() {
        return $this->baron->getTime();
    }

}
?>
