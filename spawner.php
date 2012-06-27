<?php

class Spawner {
    private $name;
    private $time;
    private $started;
    
    function __construct($name) {
        $this->time = 0;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getTime() {   
        $now = date("U");
        $respawn = ($this->started) + ($this->time);
                        
        return ($now - $respawn) * -1;
    }

    public function startTimer($interval) {        
        $this->started = date("U");
        $this->time = $interval;
    }
}

?>
