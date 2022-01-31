<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
                    <a class="nav-link active" href="support.php">Support</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </nav>
            </div>
        </header>

        <main class="px-3 ">
            <br>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 card">
                <form class="form-group container" action="create.php" method="POST">
                    <h4> Create User </h4>
                    <div class="col">
                        <label class="form-label" name="index_no"> INDEX NO / TSC NO </label>
                        <input type="number" class="form-control" name="index_no" required />
                        <label class="form-label" name="password"> Password </label>
                        <input type="password" class="form-control" name="password" required>
                        <label class="form-label" name="confirm_password"> Confirm Password </label>
                        <input type="password" class="form-control" name="confirm_password" required>
                    </div>
                    <br>
                    <div class="">
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary">
                            CREATE USER
                        </button>
                    </div>
                    <br>
            </div>
            </form>
            <hr />
            <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-light">
                <!-- Copyright -->
                <div class="text-primary mb-3 mb-md-0">
                    Copyright © 2021. IOSSS, All rights reserved.
                </div>
                <!-- Copyright -->
            </div>
        </main>
    </div>

</body>

</html>