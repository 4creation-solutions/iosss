<?php

include('C:\xampp\htdocs\iosss\config.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $index_no = mysqli_real_escape_string($link, $_POST['index_no']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    $sql = "SELECT * FROM tblusers WHERE index_no = '$index_no' and password = '$password'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        // session_register("index_no");
        // $_SESSION['login_user'] = $index_no;
        $_SESSION['index_no'] = $index_no;
        header("location: landing_page.php");
    } else {
        $error = "<div> Your Login Name or Password is invalid</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> IOSSS </title>
    <link rel="stylesheet" href="ios.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
</head>

<body class="d-flex h-100 text-center bg-light">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">IOSSS</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="support.php">Support</a>
                </nav>
            </div>
        </header>
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <?php $error ?>
                        <form action="" method="POST">
                            <h4> STUDENT LOGIN </h4>
                            <hr>
                            <!-- INDEX input -->
                            <div class="form-outline mb-4">
                                <input type="number" name="index_no" class="form-control form-control-lg" required />
                                <label class="form-label" for="index_no">KCPE INDEX NO</label>
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter provided password" required />
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">
                                        Remember me
                                    </label>
                                </div>
                                <a href="support.php" class="text-body">Forgot password?</a>
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" value='submit' class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-light">
                <!-- Copyright -->
                <div class="text-primary mb-3 mb-md-0">
                    Copyright © 2021. IOSSS, All rights reserved.
                </div>
                <!-- Copyright -->
            </div>
        </section>
</body>

</html>