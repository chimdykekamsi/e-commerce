<?php
session_start();

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "morning_dew");

$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

require_once "db.php";
require_once "helpers.php";
require_once "actions.php";
require_once "users.php";