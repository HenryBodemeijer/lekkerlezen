<?php include "templates/header.php"; ?>
<?php include "templates/navbar.php"; ?>

<div class="banner-image  vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
        <h1 class="titel1">Bookshop</h1>
    </div>
</div>

<table class="tabel">
    <tr>
        <td colspan="6"><h2>Top 10 gekochten boeken!</h2></td>
    </tr>
<?php

include "scripts/connectdb.php";

$sql = "SELECT * FROM book ORDER BY rating DESC LIMIT 10";

$sth = $db->prepare($sql);

$sth->execute();

$nummer = 1;

while ($row = $sth->fetch()) {
    echo "<tr class='tr'>";
    echo "<td>" . $nummer . "</td>";
    echo "<td>" . $row["titel"] . "</td>";
    echo "<td>" . $row["auteur"] . "</td>"; ?>
<?php echo "<td>" . $row["rating"] . "/10" . "</td>";?>
<?php echo "<td><img src='image/" . $row["afbeelding"] . "'width='75'></td>";

    echo "<td><a href='detail.php?id=" . $row["id"] . "'>details</a></td>";

    echo "</tr>";

    $nummer++;


}

?>
</table>
<?php include "templates/footer.php"; ?>
