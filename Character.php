<?php

class Character
{
    public $name;
    public $hp = 100;
    private $warcry;

    public function __construct($nom_instance, $cri_instance)
    {
        $this->name = $nom_instance;
        $this->warcry = $cri_instance;
    }
    
    public function getWarcry()
    {
        return $this->warcry;
    }
}