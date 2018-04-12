<?php

session_start();

require_once "./connexion.php";

$sqlDelete = "
    DELETE FROM
      `command`
    WHERE
      `id_command` = :command
    AND
      `id_user` = :user
";

$stmt = $conn->prepare($sqlDelete);
$stmt->bindValue(":command", $_GET["id"]);
$stmt->bindValue(":user", $_SESSION["user"]["id"]);
$stmt->execute();

header("location: ./viewCommand.php");
exit;