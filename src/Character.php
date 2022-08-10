<?php

namespace App;

class Character {

    private int $health;
    private int $level;
    private bool $alive;
    private int $damage;
    

    public function __construct() 
    {

        $this->health = 1000;
        $this->level = 1;
        $this->alive = true;
        $this->damage = 500;

    }

    public function getHealth() 
    {
        return $this->health;
    }
    
    public function getLevel() 
    {
        return $this->level;
    }

    public function isAlive() 
    {
       return $this->alive;
    }

    public function attack($enemy) {
    $enemy->health = $enemy->health - 100;
    }

    public function setHealing($health) {
    $this->health = $health;
    return $this;
    }

}

?>