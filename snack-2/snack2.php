<!-- Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php

$user_name = $_GET["name"];
$user_email = $_GET["email"];
$user_age = $_GET["age"];

if ((strlen($user_name) > 3) && is_numeric($user_age)) {
    var_dump("accesso riuscito");
} else {
    var_dump("accesso non riuscito");
};

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melvin Jerome Luna Maligaya">
    <title>???????????</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <h1>snack 2</h1>
                    <form action="snack2.php" method="GET">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="name"
                                    aria-label="name">
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control" placeholder="email"
                                    aria-label="email">
                            </div>
                            <div class="col">
                                <input type="text" name="age" class="form-control" placeholder="age" aria-label="age">
                            </div>
                            <button type="submit" class="btn btn-primary">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>