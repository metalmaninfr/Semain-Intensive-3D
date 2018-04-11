<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 11/04/2018
 * Time: 11:46
 */

session_start();
require_once "./connexion.php";

$requestUser = "
INSERT INTO
  `users`
    (`user_name`, `user_password`,`user_adress`, `user_email`)
  VALUES
    (:userName, :userPassword, :userAdress, :userEmail)
;
";

$stmtUser = $conn->prepare($requestUser);
$stmtUser->bindValue(':userName', $_POST['userName']);
$stmtUser->bindValue(":userPassword", $_POST["f"]);
$stmtUser->bindValue(":userAdress", $_POST['adress']);
$stmtUser->bindValue(":userEmail", $_POST["mail"]);
$stmtUser->execute();

var_dump($stmtUser);

$sqlConnectIntant = "
    SELECT
        user_name,
        user_email,
        user_adress
        FROM
          users
        WHERE
          user_email = :email;
";

$instant = $conn->prepare($sqlConnectIntant);
$instant->bindValue(":email", $_POST["mail"]);
$instant->execute();
$row = $instant->fetch(PDO::FETCH_ASSOC);

$_SESSION["user"]["name"] = $row["user_name"];
$_SESSION["user"]["email"] = $row["user_email"];
$_SESSION["user"]["adress"] = $row["user_adress"];

header("location: ../../index.php");
exit;