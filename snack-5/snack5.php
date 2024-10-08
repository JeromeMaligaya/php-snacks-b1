<?php
$user_word = $_GET['user-word'];

function isPalindroma($user_word)
{
    if (trim($user_word) === trim(strrev($user_word))) {
        var_dump("E' PALINDROMA");
    } else {
        var_dump("NON E' PALINDROMA");
    }
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melvin Jerome Luna Maligaya">
    <title>snack-5</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <form action="snack5.php" method="GET" class="col-12 row">
                        <div class="col-4 mb-3">
                            <label for="user-word">vote:</label>
                            <input type="text" name="user-word" id="user-word" placeholder="type a word...">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-primary">Send</button>
                        </div>

                    </form>
                </div>
                <div class="col-12">
                    <h1 class="fw-bolder text-center">snack-5</h1>

                </div>
            </div>
    </main>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>