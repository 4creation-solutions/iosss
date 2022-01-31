<?php

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $gender = trim($_POST['gender']);
    $school = trim($_POST['school']);
    $index_no = trim($_POST['index_no']);
    $eng = trim($_POST['eng']);
    $kisw = trim($_POST['kisw']);
    $math = trim($_POST['math']);
    $sci = trim($_POST['sci']);
    $sst = trim($_POST['sst']);
    $rel = trim($_POST['rel']);
    $agmarks = trim($_POST['agmarks']);

    if ($query = $link->prepare("SELECT * FROM tblstudents WHERE index_no = ?")) {
        $error = '';
        $students = 0;
        $query->bind_param('i', $index_no);
        $query->execute();

        $query->store_result();

        if ($query->num_rows > 0) {
            $error = '<p class="text-danger"> User Exists </p>';
        } else {
            $insertQuery = $link->prepare("INSERT INTO tblstudents (fname, lname, gender, school, index_no, eng, kisw, math, sci, sst, rel, agmarks) VALUES ('$fname', '$lname', '$gender', '$school', '$index_no', '$eng', '$kisw', '$math', '$sci', '$sst', '$rel', '$agmarks');");
            $insertQuery->bind_param('ssssiiiiiiii', $fname, $lname, $gender, $school, $index_no, $eng, $kisw, $math, $sci, $sst, $rel, $agmarks);
           
            $result = $insertQuery->execute();
            if ($result) {
           
                header("location: success.php");
            } else {
                echo '<p class="text-danger"> SOMETHING WENT WRONG, RETRY! </p>';
                header("location: application.php");
            }
            $insertQuery->close();
        }
        $query->close();
    }
    //close connection
    mysqli_close($link);
}
