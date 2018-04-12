<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 12/04/2018
 * Time: 10:32
 */

session_start();
unset($_SESSION["user"]);
unset($_SESSION["log"]);
header("location: ../../index.php");
exit;