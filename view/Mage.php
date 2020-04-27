<?php
require_once '../Model/Character.php';
/**
 * 
 */

class Mage extends Character {

    protected $id = 3;

    /**
     * Default constructor
     */
    public function __construct($name) {
        Character::__construct($name, 15);
    }

    /**
     * 
     */
    public function regain($pCharac) {
        if ($pCharac->touched) 
        {
            $this->life +=$pCharac->dmg*0.2;
            echo $this->name . " regénère sa vie de " . $pCharac->dmg*0.2 . " points <br>" ;
        }
        
                   
    }

    public function setDmg($pCharac)
    {
        $pCharac->life -= $this->dmg;
        if ($pCharac->life > 0 ) 
            {
                
                echo $pCharac->name . " a reçu " . $this->dmg . " points de dégats de " . $this->name . " et il lui reste " . $pCharac->life . " points de vies! <br>";

            } else if ($pCharac->life < $this->dmg) 
            {
               return $pCharac->name . " a reçu " . $this->dmg . " points de dégats de " . $this->name . " . " . $pCharac->name . " est mort! <br>";
            } else 
            {
                return;
            }
            
            

    }

    /**
     * 
     */
    public function hit($pCharac) {
        $touch= rand(1, 3) ;        
        if ($touch%2 != 0) 
        {   
            $this->touched = true;               
            $this->setDmg($pCharac);            
        } else
        {
            $this->touched = false;
            echo $this->name . "à raté son coup ! <br>";
        }   
        if ($pCharac->touched) 
        {
            $this->regain($pCharac);
        }  
          
        $this->touched = false;
    }

     /**
     * @return
     */
    public function getName() {
        // TODO implement here
        return $this->name;
    }

    /**
     * @return
     */
    public function getLife() {
        // TODO implement here
        return $this->life;
    }

    /**
     * @return
     */
    public function getDmg() {
        // TODO implement here
        return $this->dmg;
    }
}