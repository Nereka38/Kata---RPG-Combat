<?php

namespace App;

class Character {

    private int $health;
    private int $level;
    private bool $live;
    private int $damage;
    

    public function __construct() 
    {

        $this->health = 1000;
        $this->level = 1;
        $this->live = $this->health;
        $this->damage = 500;

    }

    public function getHealth() 
    {
        return $this->health;
    }

    public function setHealth($health) 
    {
        $this->health = $health;
    }
    
    public function getLevel() 
    {
        return $this->level;
    }

    public function isALive() 
    {
       return $this->Live;
    }

    public function isDead() 
    {
        return $this->health == 0;
    }

    public function attack($enemy, $attackPoints) {
        
    }

}

?>