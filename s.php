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
                echo "You secured your selection";
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

