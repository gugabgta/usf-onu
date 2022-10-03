<?php

class Attributes
{
    protected $id_fish_attribute;
    protected $id_fish;
    protected $intelligence;
    protected $power;
    protected $defense;
    protected $mobility;
    protected $hp;
    protected $stealth;

    public function __construct(array $attributes) {
        foreach ($attributes as $attr => $value) {
            $this->$attr = $value;
        }
    }
}