<?php include "templates/header.php"; ?>
<?php include "templates/navbar.php";?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$vraag = $_POST['vraag'];?>

<div class="contact">
<?php
echo "<h3>" . "Bedankt $name voor het insturen van je vraag/opmerking." . "</h3><br>";
echo "<h3>" . "Uw E-mail adress: $email" . "</h3><br>";
echo "<h3>" . "Uw ingestuurde vraag/opmerking:" . "<br>" . $vraag . "</h3><br>"?>
</div>

<?php include "templates/footer.php";?>