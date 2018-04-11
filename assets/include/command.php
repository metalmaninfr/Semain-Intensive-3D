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
  (id_user, price, nb_piece, stand_size)
VALUES
  (:userId, price, nbPiece, standSize)
";

$stmt = $conn->prepare($sqlCommand);
$stmt->bindValue(":userId", $_SESSION["user"]["id"]);
$stmt->bindValue(":price", $_POST['price']);
$stmt->bindValue(":nbPiece", $_POST['nbPiece']);
$stmt->bindValue(":standSize", $_POST['standSize']);
$stmt->execute();

header("location: index.php");
exit;