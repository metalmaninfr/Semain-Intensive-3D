<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 11/04/2018
 * Time: 11:39
 */

require_once "./connexion.php";
session_start();

$sqlCommand = "
INSERT INTO
  `command`
  (id_user, price, nb_piece, stand_size, wall)
VALUES
  (:userId, :price, :nbPiece, :standSize, :wall)
;";

$stmt = $conn->prepare($sqlCommand);
$stmt->bindValue(":userId", $_SESSION["user"]["id"]);
$stmt->bindValue(":price", intval($_POST['price']));
$stmt->bindValue(":nbPiece", intval($_POST['nbPiece']));
$stmt->bindValue(":standSize", intval($_POST['standSize']));
$stmt->bindValue(":wall", intval($_POST['wall']));
$stmt->execute();

var_dump($_POST["nbPiece"]  );

header("location: ../../index.php");
exit;