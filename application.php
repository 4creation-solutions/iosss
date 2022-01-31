<?php
session_start();
// check login status
if (!isset($_SESSION["login_user"]) || $_SESSION["login_user"] === true) {
header("location:login.php");
exit;
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
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
</head>

<body class="d-flex h-100 text-center bg-light">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">IOSSS</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" href="selection.php">Selection</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                    <a class="nav-link" href="support.php">Support</a>
                </nav>
            </div>
        </header>
        <main class="px-3">
            <div class="container">
                <h4 class="text-center"> Please fill out your details to secure your choice. </h4>
                <form action='apply.php' method="POST" class='text-center'>
                    <div class="row">
                        <div class="col-md-4 container">
                            <legend> Student Personal Details</legend>
                            <hr>
                            <label class="form-label" for="fname"> First Name </label>
                            <input type="text" class="form-control" name="fname" id="fname" required>
                            <label class="form-label" for="lname"> Last Name </label>
                            <input type="text" class="form-control" name="lname" id="lname" required>
                            <br>
                            <label class="form-label" for="gender">
                                <select name="gender" class="form-control">
                                    <option> Gender </option>
                                    <option value="male"> Male </option>
                                    <option value="female">Female </option>
                                </select></label>
                            <br />
                            <label class="form-label" for="school"> Primary School Name </label>
                            <input type="text" class="form-control" name="school" id="school" required>
                            <label class="form-label" for="index_no"> Index No </label>
                            <input type="number" class="form-control" name="index_no" id="index_no" required>
                            <br>
                        </div>
                        <div class="col-md-4 container">
                            <legend> Please Add your scores for the Examination </legend>
                            <hr>
                            <label class="form-label" for="eng"> English </label>
                            <input type="number" class="form-control" name="eng" id="eng" required>
                            <label class="form-label" for="kisw"> Kiswahili </label>
                            <input type="number" class="form-control" name="kisw" id="kisw" required>
                            <label class="form-label" for="math"> Mathematics </label>
                            <input type="number" class="form-control" name="math" id="math" required>
                            <label class="form-label" for="sci"> Science </label>
                            <input type="number" class="form-control" name="sci" id="sci" required>
                            <label class="form-label" for="sst"> Social Studies </label>
                            <input type="number" class="form-control" name="sst" id="sst" required>
                            <label class="form-label" for="rel"> Religion </label>
                            <input type="number" class="form-control" name="rel" id="rel" required>
                            <label class="form-label" for="agmarks"> Aggregate Marks </label>
                            <input type="number" class="form-control" name="agmarks" id="agmarks" required>
                            <br>
                        </div>
                    </div>
                    <p class="lead text-info"><strong> INFO : </strong> Please verify the details to be correct before submitting!</p <hr>
                    <button type="submit" class="btn btn-primary" value="Submit" name="submit">
                        Submit
                    </button>
                </form>
            </div>
        </main>
</body>

</html>