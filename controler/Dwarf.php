<?php

require_once '../Model/Character.php';
/**
 * 
 */
class Dwarf extends Character {

    

    protected $id = 2;

    /**
     * Default constructor
     */
    public function __construct($name) {
        Character::__construct($name, 10);
    }

    /**
     * 
     */
    public function hit($pCharac) {
        $this->touched = true;
        $this->setDmg($pCharac);
        
    }

    /**
     * @return
     */
    public function getName() {
        // TODO implement here
        return $this->name;
    }

    /**
     * @param $value
     */
    public function setName($value) {
        // TODO implement here
    }

    /**
     * @return
     */
    public function getLife() {
        // TODO implement here
        return $this->life;
    }

    /**
     * @param $value
     */
    public function setLife($value) {
        // TODO implement here
    }

    /**
     * @return
     */
    public function getDmg() {
        // TODO implement here
        return $this->dmg;
    }

    /**
     * @param $value
     */
    public function setDmg($pCharac)
    {
        $pCharac->life -= $this->dmg;
        if ($pCharac->life > 0 ) 
        {
            echo $pCharac->name . " a reçu " . $this->dmg . " points de dégats de " . $this->name . " et il lui reste " . $pCharac->life . " points de vies! <br>";
            
        } else if ($pCharac->life < $this->dmg) 
        {
            echo $pCharac->name . " a reçu " . $this->dmg . " points de dégats de " . $this->name . " . " . $pCharac->name . " est mort! <br>";
        } else 
        {
            
           return;
        }

    }

    

    /**
     * @return
     */
    public function getPics() {
        // TODO implement here
        return null;
    }

    /**
     * @param $value
     */
    public function setPics($value) {
        // TODO implement here
    }

    

}