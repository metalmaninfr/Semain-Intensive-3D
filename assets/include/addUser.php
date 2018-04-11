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
  `user`
    (`user_name`, `user_password`, `user_admin`, `user_adress`, `user_email`)
  VALUES
    (:userName, userPassword, :userAdmin, :userAdress, :userEmail)
;
";

$stmtUser = $conn->prepare($requestUser);
$stmtUser->bindValue(':userName', $_POST['userName']);
$stmtUser->bindValue(":userPassword", $_POST["f"]);
$stmtUser->bindValue(":userAdmin", false);
$stmtUser->bindValue(":userAdress", $_POST['adress']);
$stmtUser->bindValue(":userEmail", $_POST["mail"]);
$stmtUser->execute();



