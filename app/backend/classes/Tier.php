<?php

class Tier
{
    protected $id_tier;
    protected $name;
    protected $weight;
    protected Database $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAll()
    {
        return $this->db->get('tier')->results() ?? [];
    }
}
