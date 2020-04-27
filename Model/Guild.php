<?php

/**
 * 
 */
class Guild  {

    /**
     * 
     */
    public $name;

    /**
     * 
     */
    public $pics;

    public $content;

    /**
     * Default constructor
     */
    public function __construct(string $name, string $pics="", $content = array()) {
        $this->name = $name;
        $this->pics = $pics;
        $this->content = $content;
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
    public function getPics() {
        // TODO implement here
        return $this->pics;
    }

    /**
     * @param $value
     */
    public function setPics($value) {
        // TODO implement here
    }

}