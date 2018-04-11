<?php
require_once "./assets/include/connexion.php";
include "./assets/include/function.php";

session_start();

$user = $_SESSION["user"];

if (isset($user["name"]) && isset($user["email"]) && isset($user["adress"])) {
    $_SESSION["log"] = true;
} else {
    $_SESSION["log"] = false;
}

m_header();
m_main();
m_footer();

