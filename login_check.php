<?php

    session_start();
    error_reporting(0);

    $host="localhost";
    $user="root";
    $password="";
    $db="SchoolProject";

    $data=mysqli_connect($host, $user, $password, $db);

    if ($data === false)
    {
        die("Connection Error");
    }

    if ($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        $name = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "select * from user where Username = '".$name."' AND Password = '".$pass."'";

        $result = mysqli_query($data, $sql);

        $row = mysqli_fetch_array($result);

        if ($row["User_Type"] == "student")
        {
            $_SESSION['username'] = $name;
            $_SESSION['usertype'] = "student";
            header("location:studenthome.php");
        }

        elseif ($row["User_Type"] == "admin")
        {
            $_SESSION['username'] = $name;
            $_SESSION['usertype'] = "admin";
            header("location:adminhome.php");
        }

        elseif ($row["User_Type"] == "teacher")
        {
            $_SESSION['username'] = $name;
            $_SESSION['usertype'] = "teacher";
            header("location:teacherhome.php");
        }

        else{
            $message = "Username and password mismatch!";
            $_SESSION['loginMessage'] = $message;
            header("location: login.php");
        }
    }
?>