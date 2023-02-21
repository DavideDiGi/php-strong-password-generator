<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> <!-- importazione Bootstrap -->

    <link rel="stylesheet" href="css/style.css"> <!-- importazione CSS -->
</head>

<body>
    <div class="container-fluid w-75 mx-auto text-center">
        <h1 class="text-center pt-5">Strong Password Generator</h1>
        <form class="mt-3" action="" method="get">
            <label class="d-block text-danger" for="numb">Scegli la lunghezza della tua password</label>
            <input class="d-inline-block mt-1" id="numb" type="number" min="0" max="20" name="pass" placeholder="Massimo 20 caratteri">
            <button type="submit">Conferma!</button>
        </form>
        <div class="result mt-2">
            <h3>
                La tua password è:
            </h3>
            <span>
                <?php echo generatePassword($_GET["pass"]); ?>
            </span>
        </div>
    </div>

</body>

</html>