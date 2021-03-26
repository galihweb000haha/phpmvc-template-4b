<?php
define('ROOT', str_replace("Public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
// $root = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
// $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
// $root = rtrim($root, '/');
// define('BASEURL', $root);
require(ROOT . 'Config/core.php');