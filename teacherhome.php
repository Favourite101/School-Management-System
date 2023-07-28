<?php

session_start();
if (!isset($_SESSION['username']))
{
    header("location: login.php");
}
elseif (!($_SESSION['usertype'] == "teacher"))
{
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="styles/adminhome.css?v=<?php echo time()?>">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav>
            <label for="logo" class="logo">Some School</label>
            <a href="logout.php" class="btn btn-info btn-lg" id="_logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
        </nav>
        <br>
        <br>
        <aside class="menu">
            <ul>
                <li>
                    <a href="">Dashboard</a>
                </li>
                <li>
                    <a href="">Admission</a>
                </li>
                <li>
                    <a href="">Students</a>
                </li>
                <li>
                    <a href="">Staff</a>
                </li>
                <li>
                    <a href="">Parents</a>
                </li>
                <li>
                    <a href="">Classes</a>
                </li>
                <li>
                    <a href="">Finance</a>
                </li>
            </ul>
        </aside>

        <div class="message">
            <h1>Message from school</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum esse quis ducimus. Voluptatum quos corporis alias dolore natus voluptatem et nobis! Est commodi nostrum totam nisi laboriosam porro itaque nam modi a, cupiditate dolores possimus delectus qui fugit voluptatem ab aut nemo. Animi fugiat error temporibus, a nisi laboriosam quod!</p>
        </div>
    </body>
</html>