<?php

require_once 'start.php';

$id_fish = $_GET['id'];
$fish = new Fish();
$fish->delete($id_fish);
