
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
    <link href="cover.css" rel="stylesheet">
      <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
</head>
<body class="d-flex h-100 text-center bg-light">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">IOSSS</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link btn" href="landing_page.php">Home</a>
                     <a class="nav-link active" href="selection_view.php">View Status</a>
                    <a class="nav-link" href="support.php">Support</a>
                </nav>
            </div>
        </header>
        <main class="px-3">
            <div class="container text-success">
              <h1>Congratulations Student</h1>
            <?php
                include_once 'config.php';
                session_start();

                $index_no = $_SESSION['index_no'];

                // Check connection
                if ($link === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                // Attempt select query execution
                $sql = "SELECT * FROM tblselection WHERE index_no = '" .$_SESSION['login_user']. "' " ;
                 $sql = "SELECT * FROM tblselection WHERE index_no " ;
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<div class="table-responsive">';
                        echo '<table class="table">';
                        echo '<thead>';
                        echo "<tr>";
                        // echo '<th scope="col">Id</th>';
                        echo '<th scope="col">School</th>';
                        // echo '<th scope="col">Last Name</th>';
                        echo "</tr>";
                        echo  '<thead>';
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tbody>';
                            echo "<tr>";
                            echo "<td>" . $row['selection'] . "</td>";
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
        </main>
</body>

</html>