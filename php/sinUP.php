<?php

require "regex.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>

<body class="text-danger">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h3 class="navbar-brand"><a href="index.php">MY CONTACT</a> </h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class=" collapse navbar-collapse" id="navbarScroll">
                    <form class="d-flex " role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class=" navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="connexion.php"> Connexion</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <section class="d-flex align-items-center vh-100 ">
        <div class="container bg-success   border border-1 rounded border-success   w-50  ">
            <form class=" col-12" action="sinUP.php" method="post">

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="fs-4 text-light form-label">fullname :</label>
                    <input type="name" placeholder="full name" class="form-control" id="fullname"
                        name="fullname">
                    <?php echo "<p class='note'>" . $msg_name . "</p>"; ?>
                    <?php echo "<p class='note'>" . $msg2_name . "</p>"; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="fs-4 text-light form-label">username :</label>
                    <input type="name" placeholder="user name" class="form-control" id="user_name"
                        name="user_name">
                    <?php echo "<p class='note'>" . $msg_name . "</p>"; ?>
                    <?php echo "<p class='note'>" . $msg2_name . "</p>"; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="fs-4 text-light form-label">Email:</label>
                    <input type="email" placeholder="email" class="form-control" id="email"
                        name="email">
                    <?php echo "<p class='note'>" . $msg_name . "</p>"; ?>
                    <?php echo "<p class='note'>" . $msg2_name . "</p>"; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="text-light fs-4 form-label">Password :</label>
                    <input type="password" placeholder="Password" class="form-control" id="Password1" name="Password1">
                    <?php echo "<p class='note'>" . $msg_password . "</p>"; ?>
                    <?php echo "<p class='note'>" . $msg2_password . "</p>"; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="text-light fs-4 form-label">Confirme Password : </label>
                    <input type="password" placeholder="Confirme Password" class="form-control" id="Password2"
                        name="Password2">
                    <?php echo "<p class='note'>" . $msg_password2 . "</p>"; ?>
                </div>
                <div class="d-flex justify-content-between text-light  mb-3">

                </div>

                <button type="submit" class="btn btn-primary w-100" name="Submit">connexion</button>
            </form>


        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>