<?php

session_start();

require_once realpath(__DIR__ . '/../') . '/auth/config.php';
require_once realpath(__DIR__ . '/../') . '/core/Helpers.php';

spl_autoload_register("autoload");
