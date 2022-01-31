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
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center bg-light">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">IOSSS</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link btn" href="iosss.php">Home</a>
                    <a class="nav-link" href="support.php">Support</a>
                </nav>
            </div>
        </header>
        <main class="px-3">
            <div class="container">
                <h1> Placed Students </h1>
                <hr>
                <?php
                include_once 'config.php';
                // Check connection
                if ($link === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                // Attempt select query execution
                $sql = "SELECT * FROM tblselection WHERE selection = selection";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<div class="table-responsive">';
                        echo '<table class="table">';
                        echo '<thead>';
                        echo "<tr>";
                        echo '<th scope="col">Id</th>';
                         echo '<th scope="col">INDEX NO: </th>';
                        // echo '<th scope="col">First Name</th>';
                        // echo '<th scope="col">Last Name</th>';
                        // echo '<th scope="col">Gender</th>';
                        // echo '<th scope="col">School</th>';
                        // echo '<th scope="col">Index No </th>';
                        // echo '<th scope="col">English </th>';
                        // echo '<th scope="col">Kiswahili</th>';
                        // echo '<th scope="col">Mathematics</th>';
                        // echo '<th scope="col">Science</th>';
                        // echo '<th scope="col">SST</th>';
                        // echo '<th scope="col">Religion</th>';
                        // echo '<th scope="col">AG MARKS</th>';
                        // echo "</tr>";
                        // echo  '<thead>';
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tbody>';
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['index_no'] . "</td>";
                            // echo "<td>" . $row['fname'] . "</td>";
                            // echo "<td>" . $row['lname'] . "</td>";
                            // echo "<td>" . $row['gender'] . "</td>";
                            // echo "<td>" . $row['school'] . "</td>";
                            // echo "<td>" . $row['index_no'] . "</td>";
                            // echo "<td>" . $row['eng'] . "</td>";
                            // echo "<td>" . $row['kisw'] . "</td>";
                            // echo "<td>" . $row['math'] . "</td>";
                            // echo "<td>" . $row['sci'] . "</td>";
                            // echo "<td>" . $row['sst'] . "</td>";
                            // echo "<td>" . $row['rel'] . "</td>";
                            // echo "<td>" . $row['agmarks'] . "</td>";
                            echo "</tr>";
                            echo '</tbody>';
                        }
                        echo "</table>";
                        echo '</div>';
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo '<div class="text-center text-danger"> YOUR SCHOOL DOES NOT HAVE ANY SELECTIONS! </div>';
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }

                // Close connection
                mysqli_close($link);
                ?>

            </div>
        </main>
</body>
</html>