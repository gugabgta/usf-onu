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
    protected Database $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getById($id_fish): Attributes
    {
        $res = $this->db->get('fish_attribute', ['id_fish', '=', $id_fish])->first() ?? [];
        $this->id_fish_attribute = $res->id_attribute;
        $this->id_fish = $res->id_fish;
        $this->intelligence = $res->intelligence;
        $this->power = $res->power;
        $this->defense = $res->defense;
        $this->mobility = $res->mobility;
        $this->hp = $res->hp;
        $this->stealth = $res->stealth;
        return $this;
    }

    public function getIdFishAttribute()
    {
        return $this->id_fish_attribute;
    }

    public function getIdFish()
    {
        return $this->id_fish;
    }

    public function getIntelligence()
    {
        return $this->intelligence;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getDefense()
    {
        return $this->defense;
    }

    public function getMobility()
    {
        return $this->mobility;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getStealth()
    {
        return $this->stealth;
    }

}
