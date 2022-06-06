<?php include "templates/header.php"; ?>
<?php include "templates/navbar.php"; ?>

<h1 class="titel2">Contact</h1>

<div class="wrapper">

    <form action="contact.php" method="post">
        <div class="section1">
            <label for="name">Naam:</label><br>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="section2">
            <label for="email">E-mail:</label><br>
                <input type="email" name="email" id="email" required>
        </div>

        <div class="section3">
            <label for="vraag">Vraag/Opmerking:</label><br>
            <textarea name="vraag" id="vraag" cols="22" rows="3" required></textarea><br>
        </div>

        <div class="section4">
                <input type="submit" name="submit" id="submit">
        </div>
    </form>
</div>





