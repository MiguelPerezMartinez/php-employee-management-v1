<?php

require_once("./src/library/loginManager.php");

// $alert = checkSession();
?>

<!DOCTYPE html>
<html lang="en-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js">
    </script>
    <link rel="stylesheet" href="./assets/css/login.css">;
    <title>Employee management</title>
</head>

<body>

</body>
<main class="form-signin">
    <form id="formLogIn" action="./src/library/loginController.php" method="POST">

        <h1 class="h3 mb-5 fw-normal">Employee management</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" data-bs-toggle="tooltip" data-bs-html="true" title="imassembler@assemblerschool.com" autofocus>
            <label class="mt-2" for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password" title="Assemb13r">
            <label for="floatingPassword">Password</label>
        </div>
        <!-- <?= ($alert) ? "<div class='alert alert-$alert[type] role='alert'>$alert[text]</div>" : "" ?> -->
        <button class="w-100 btn btn-lg btn-dark" type="submit">Log in</button>
        <p class="mt-3 mb-3 text-muted">Employee management&nbsp;&copy; 2021</p>
        <p class="mt-3 mb-3 text-muted">Made with ❤️ in Madrid</p>

    </form>
</main>


<!-- <script src="./assets/js/index.js"></script> -->

</html>