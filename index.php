<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php
        $page_title = "Home";
        include('./components/head.php');
    ?>
</head>
<body>
    <?php include('./components/nav.php'); ?>

    <?php include('./components/grid-item.php'); ?>
    <section class="moth-contain">
        <div class="moths moth1">
            <img class="moth-images" src="../images/Atlas-moth.webp" alt="blue">
            <h2> Atlas Moth </h2>
        </div>

        <div class="moths moth1">
            <img class="moth-images" src="../images/bella-moth.jpeg" alt="blue">
            <h2>Bella Moth </h2>
        </div>

        <div class="moths moth1">
            <img class="moth-images" src="../images/cecropia-moth.jpeg" alt="blue">
            <h2> Cecropia Moth </h2>
        </div>

        <div class="moths moth1">
            <img class="moth-images" src="../images/deaths-head-moth.webp" alt="blue">
            <h2> Death's Head Moth </h2>
        </div>

        <div class="moths moth1">
            <img class="moth-images" src="../images/garden-tiger-moth.jpeg" alt="blue">
            <h2> Garden Tiger Moth </h2>
        </div>

        <div class="moths moth1">
            <img class="moth-images" src="../images/lunar-moth.webp" alt="blue">
            <h2> Lunar Moth </h2>
        </div>
    </section>

    <?php include('./components/footer.php'); ?>
</body>
</html>

<?php
?>

<!-- include('./components/nav.php'); -->