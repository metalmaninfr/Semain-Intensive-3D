<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 12/04/2018
 * Time: 11:45
 */

session_start();

if ($_SESSION["log"] == false) {
    header("location: ./log.php?co=noco");
    exit;
}

var_dump($_SESSION);
require_once "./connexion.php";
include "./function.php";

$my_command = "
SELECT
id_command,
id_user,
price,
nb_piece,
stand_size,
wall,
light,
chair,
document_holder,
home,
flag
FROM
`command`
WHERE
`id_user` = :userId
;";

$stmt = $conn->prepare($my_command);
$stmt->bindValue(":userId", $_SESSION["user"]["id"]);
$stmt->execute();
m_header();
?>

<table>
    <td>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr>commande n°<?=$row["id_command"]?>        </tr>
        <tr>taille de stand: <?=$row["stand_size"]?>m²       </tr>
        <tr>total de piece: <?=$row["nb_piece"]?>       </tr>
        <tr>nombre de mur: <?=$row["wall"]?>     </tr>
        <tr><a href="./delete.php?id=<?=$row["id_command"]?>">supprimer</a></tr> <br />
        <?php
            endwhile;
        ?>
    </td>
</table>


<?php
    m_footer();



