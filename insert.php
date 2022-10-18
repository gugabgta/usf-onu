<?php

require_once 'start.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fish = new Fish();
    $values = [];
    $values['name'] = $_POST['name'];
    $values['image_src'] = $_POST['image_src'];
    $values['description'] = $_POST['description'] ?? '';
    $id_fish = $fish->store($values);

    $attr = new Attributes();
    $attr_values = [];
    $attr_values['intelligence'] = $_POST['intelligence'] ?? 0;
    $attr_values['power']        = $_POST['power']        ?? 0;
    $attr_values['defense']      = $_POST['defense']      ?? 0;
    $attr_values['mobility']     = $_POST['mobility']     ?? 0;
    $attr_values['hp']           = $_POST['hp']           ?? 0;
    $attr_values['stealth']      = $_POST['stealth']      ?? 0;
    $attr_values['id_fish']      = $id_fish               ?? -1;

    $attr->store($attr_values);
    header('Location: index.php');
    exit();
}

require_once FRONTEND_INCLUDE . 'header.php';
require_once FRONTEND_INCLUDE . 'navbar.php';
require_once FRONTEND_INCLUDE . 'messages.php';
require_once FRONTEND_PAGE    . 'insert.php';
require_once FRONTEND_INCLUDE . 'footer.php';
