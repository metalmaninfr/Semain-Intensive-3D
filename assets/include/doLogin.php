<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 11/04/2018
 * Time: 15:03
 */

session_start();
require_once "./connexion.php";
include "./function.php";

if (!(isset($_POST["name"]) && isset($_POST["password"]))) {
    header("loaction: index.php?error=wrong");
    exit;
}

$conect = "
    SELECT
        id_user,
        user_name,
        user_email,
        user_admin,
        user_adress
        FROM
          users
        WHERE
          user_name = :userName
        AND 
          user_password = :password;
";

$conectStmt = $conn->prepare($conect);
$conectStmt->bindValue(':userName', $_POST["name"]);
$conectStmt->bindValue(':password', $_POST["password"]);
$conectStmt->execute();
$row = $conectStmt->fetch(PDO::FETCH_ASSOC);


if ($row > 0) {
    $_SESSION["user"]["id"] = $row["id_user"];
    $_SESSION["user"]["name"] = $row["user_name"];
    $_SESSION["user"]["email"] = $row["user_email"];
    $_SESSION["user"]["adress"] = $row["user_adress"];
    $_SESSION["user"]["admin"] = $row["user_admin"];
}


header("location: ../../index.php");
exit;
