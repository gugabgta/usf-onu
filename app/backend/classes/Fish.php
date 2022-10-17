<?php

class Fish
{
    protected Database $db;
    protected $id_fish;
	protected $name;
	protected $id_attribute;
	protected $image_src;
	protected $id_tier;
	protected $description;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAll()
    {
        return $this->db->get('fish')->results() ?? [];
    }

    public function getById($id_fish)
    {
        $res = $this->db->get('fish', ['id_fish', '=', $id_fish])->first() ?? [];
        $this->id_fish = $res->id_fish;
        $this->name = $res->name;
        $this->id_attribute = $res->id_attribute;
        $this->image_src = $res->image_src;
        $this->id_tier = $res->id_tier;
        $this->description = $res->description;
        return $this;
    }

    public function getIdFish()
    {
        return $this->id_fish;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getIdAttribute()
    {
        return $this->id_attribute;
    }

    public function getImage_src()
    {
        return $this->image_src;
    }

    public function getIdTier()
    {
        return $this->id_tier;
    }

    public function getDescription()
    {
        return $this->description;
    }

}
