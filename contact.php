<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
    <style>

        body {
            font-family:Helvetica, Arial, sans-serif;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;

            margin: 0 auto;
            width: 70vw;
            margin-bottom: 13rem;
        }

        .form input {
            height: 30px;
        }

        h1 {
            color: beige;
            margin-top: 18rem;
            text-align: center;   
        }

        button {
            background-color: beige;
            padding: 0.2rem;
            font-size: 1.2rem;
        }

        .results {
            color: beige;
            text-align: center;
            margin-top: -6rem;
        }

    </style>
</head>
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
 