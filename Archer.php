<?php

class Archer extends Character
{
    public $power;

    public function __construct($nom_instance, $cri_instance, $pouv_instance)
    {
        parent::__construct($nom_instance, $cri_instance);
        $this->power = $pouv_instance;
    }

    public function rangeAttack($target)
    {
        $target->hp -= $this->power;
    }
}