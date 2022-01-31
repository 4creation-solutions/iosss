<?php 

require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $index_no = trim($_POST['index_no']);
    $selection = trim($_POST['selection']);

    if ($query = $link->prepare("SELECT * FROM tblselection WHERE index_no = ?")) {
        $students = 0;
        $query->bind_param('i', $index_no);
        $query->execute();
        $query->store_result();

        if ($query->num_rows > 0) {
            $error = '<p class="text-danger"> User Exists</p>';
        } else {
            $insert = $link->prepare("INSERT INTO tblselection (index_no, selection) VALUES ('$index_no', '$selection');");
            $insert->bind_param('is', $index_no, $selection);
           
            $result = $insert->execute();
            if ($result) {
                echo '<div class="text-success">You secured your selection</div>';
                header("location: success.php");
            } else {
                echo '<p class="text-danger"> SOMETHING WENT WRONG, RETRY! </p>';
            }
            $insert->close();
        }
        $query->close();
    }
    //close connection
    mysqli_close($link);
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
                    <div class="col"></div>
                    <div class="col">
                     <form action="" method='POST' class="form-group">
                   <label class="form-label" >Index NO</label>
                   <input name='index_no' id='index_no' type='number' class="form-control" required/>
                   <label class="form-label" >School Choices </label>
                   <select id='selection' name='selection' class="form-control">
                       <option value="Starehe High School">STAREHE HIGH SCHOOL</option>
                       <option value="Pangani High School">PANGANI HIGH SCHOOL</option>
                       <option value="State House High School">STATEHOUSE HIGH SCHOOL</option>
                       <option value="Precious High School">PRECIOUS HIGH SCHOOL</option>
                   </select>
                   <br />
                   <button type='submit'  value="submit" name="submit" class="btn btn-primary" >Make Selection </button>
               </form>
            </div>
            <div class="col"></div>
                </div>
            </div>
        </main>
</body>
</html>