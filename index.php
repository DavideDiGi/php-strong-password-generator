<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="pass" placeholder="Crea la tua password">
    </form>
    <?php echo generatePassword($_GET["pass"]); ?>


</body>

</html>