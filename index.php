<!DOCTYPE html>
<html lang="en">

<!-- THE HEAD -->
    <?php
        $page_title = "Home";
        include('./components/head.php');
    ?>

    <!-- THE NAV -->
    <?php include('./components/nav.php'); ?>

    <!-- GRID ITEM -->
    <?php include('./components/grid-item.php'); ?>

    <!-- SUPPORTING GRID ITEMS -->
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

    <!--  THE FOOTER -->
    <?php include('./components/footer.php'); ?>


</html>
