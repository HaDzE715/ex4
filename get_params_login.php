<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<section>
    Welcome
    <?php
        $em = $_GET["mail"];
        $un = $_GET["username"];
        $pw = $_GET["pass"];
        if($un == "Hade" && $pw == "Aa1212" && $em = "test@gmail.com")
            echo"<h2>Good Morning Mr " .$un. "</h2>";
        else
            echo"<h2> Who are you?";
    ?>
</section>
</body>
</html>
