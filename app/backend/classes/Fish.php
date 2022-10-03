<?php

class Fish
{
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAll()
    {
        return $this->db->get('fish')->results();
    }
}
