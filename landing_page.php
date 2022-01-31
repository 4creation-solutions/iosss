<?php
session_start();
// check login status
if (!isset($_SESSION["index_no"]) || $_SESSION["index_no"] === true) {
header("location:student_login.php");
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
                    <a class="nav-link" href="logout.php">Logout</a>
                    <a class="nav-link" href="support.php">Support</a>
                </nav>
            </div>
        </header>
        <main class="px-3">
            <div class="container">
                <div class='row'>
                    <div class='col'>
                        <div class='card'>
                            <div class='card-body'>
                                <a class='btn btn-primary' href='select_school.php'> Apply  For Selection</a>
                             </div>
                        </div>
                    </div>
                    <div class='col'>        
                        <div class='card'>
                            <div class='card-body'>
                                <a class='btn btn-primary'href='selection_view.php' style='margin-left: 40px;'> View Status .. </a>
                            </div>
                         </div>
                    </div>
                </div>  
            </div>
        </main>
</body>
</html>