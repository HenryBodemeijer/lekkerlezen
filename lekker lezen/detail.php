<?php include "templates/header.php"; ?>
<?php include "templates/navbar.php"; ?>

<?php

include "scripts/connectdb.php";

$id = $_GET["id"];

$sql = "SELECT * FROM book WHERE id= :id";
$sth = $db->prepare($sql);

$sth->execute([
    ":id" => $id
]);

$book = $sth->fetch();?>


<div class="detail">
<?php echo "<h1>" . $book["titel"] . "</h1><br>"; ?>
Auteur: <?php echo $book["auteur"] . "<br>"; ?>
Uitgever: <?php echo $book["uitgever"] . "<br>"; ?>
Genre: <?php echo $book["tags"] . "<br>"; ?>
Taal: <?php echo $book["taal"] . "<br>"; ?>
Prijs: <?php echo $book["prijs"] . "<br>"; ?>
Beschrijving: <br><?php echo $book["beschrijving"] . "<br><br>"; ?>
</div>
<div class="detail-img"><?php echo "<img src='image/" . $book["afbeelding"] . "' width='300'><br><br>"; ?></div>




<?php include "templates/footer.php"; ?>

