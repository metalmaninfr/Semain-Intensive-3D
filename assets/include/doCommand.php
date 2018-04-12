<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 12/04/2018
 * Time: 11:11
 */

session_start();
include "./function.php";

m_header();
?>

<form method="post" action="command.php">
    <input type="text" name="price">
    <input type="text" name="nbPiece">
    <input type="text" name="standSize">
    <input type="text" name="wall">
    <button type="submit">Valider</button>
</form>

<?php
m_footer();
