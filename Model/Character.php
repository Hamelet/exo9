<?php

/**
 * 
 */
abstract class Character {

    protected $id;

    /**
     * 
     */

    protected $touched = false;

    protected $dmg;

    /**
     * 
     */
    public $name;

    /**
     * 
     */
    protected $life;

    /**
     * 
     */
    protected $pics;

    /**
     * Default constructor
     */
    protected function __construct(string $name, int $dmg, int $life=100, string $pics='', int $id = 0) {
        $this->name = $name;
        $this->dmg = $dmg;
        $this->pics = $pics;
        $this->life = $life;
        $this->id = $id++;

    }

    /**
     * 
     */
    public abstract function hit($pCharac);


    /**
     * @return
     */
    public function getDmg() {
        // TODO implement here
        return $this->dmg;
    }

    // /**
    //  * @param $value
    //  */
    // public function setDmg($value) {
    //     // TODO implement here
    // }

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
     * @param $value
     */
    public function setName($value) {
        // TODO implement here
    }

    /**
     * @return
     */
    public function getPics() {
        // TODO implement here
        return $this->getPics();
    }

    /**
     * @param $value
     */
    public function setPics($value) {
        // TODO implement here
    }

    // public function touche($charac){
    //     switch () 
    //     {
    //         case $this->brute:
                
    //             break;
            
    //         default:
    //             # code...
    //             break;
    //     }
    // }

}