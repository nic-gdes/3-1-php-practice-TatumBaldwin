<!DOCTYPE html>
<html lang="en">
<?php
        $page_title = "Contact";
        include('./components/head.php');
    ?>
<body>
    

        <!-- THE NAV -->
         <?php include('./components/nav.php'); ?> 

        <main>
            
            <div>
                <h1> Contact us Today! </h1>
                <form class="form" action="./contact.php" method="post" >
                    <input type="text" name="name" placeholder="ex. John Doe">
                    <input type="text" name="email" placeholder="ex. name@gmail.com">
                    <input type="text" name="message" placeholder="your message here">
                    <button type="submit" name="submit">Submit your Message</button>
                </form>
            </div>

            <div class="results">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);
                }

                echo $name . ", " . $email . ", " . $message;
                ?>
            </div>

        </main>

        <!--  THE FOOTER -->
         <?php include('./components/footer.php'); ?> 

</body>
</html>
 