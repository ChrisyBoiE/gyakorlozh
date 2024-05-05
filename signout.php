<?php
require_once 'config.php';
$has_session = session_status() == PHP_SESSION_ACTIVE;
echo "". $has_session ?"":"";
if ($has_session) {
session_destroy();
}
header("location: main.php");