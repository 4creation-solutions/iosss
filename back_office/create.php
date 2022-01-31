<?php

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
{
    $index_no = trim($_POST['index_no']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if ($query = $link->prepare("SELECT * FROM tblusers WHERE index_no = ?"))
    {
        $error = '';

        $query->bind_param('i', $index_no);
        $query->execute();

        $query->store_result();

        if ($query->num_rows > 0)
        {
            $error = '<p class="text-danger"> User Exists </p>';
        }
        else 
        {
            if(strlen($password) < 8)
            {
                $error .= '<p class="text-info"> Password must be atleast 8 characters! </p>';
            }
            if(empty($confirm_password))
            {
                $error .= '<p class="text-danger">  Please confirm the password! </p>';
            }
            else
            {
                if(empty($error) && ($password != $confirm_password))
                {
                    $error .= '<p  class="text-danger"> Passwords did not match! </p>';
                }
            }
            if (empty($error))
            {
                $insertQuery = $link->prepare("INSERT INTO tblusers (index_no, password) VALUES ('$index_no', '$password');");
                $insertQuery->bind_param('is', $index_no, $password_hash);
                $result = $insertQuery->execute();
                if($result)
                {
                    $error .= '<p class="text-success"> Users created </p>';
                    header("location: success.php");
                }
                else
                {
                    $error .= '<p class="text-danger"> SOMETHING WENT WRONG, RETRY! </p>';
                }
                $insertQuery->close();
            }
        }
    }
    $query->close();
    

    //close connection
    mysqli_close($link);
}