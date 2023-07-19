<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time()?>"/>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="bodyy">
    <nav>
        <label for="logo" class="logo">Some School</label>
        <div class="div1">
            <button><a href="index.php">Home</a></button>
            <button onclick="openPopup()" id="contact-us">Contact</button>
            <button><a href="">Admissions</a></button>
            <button class="btn btn-success"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></button>
        </div>
    </nav>
    <img src="images/school2.jpg" alt="img" class="img-first">
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="images/school_management.jpg" alt="img" class="img-second">
            </div>
            <div class="row-md-8" id="intro">
                <h1>Welcome to Some School</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione a cupiditate, ullam, earum architecto laborum voluptatem ipsam accusamus obcaecati pariatur eaque voluptatibus nulla possimus excepturi suscipit facere adipisci enim ducimus! Officiis fuga necessitatibus iusto dolor praesentium cupiditate minima repellendus, magnam, optio aut ad aliquam placeat. Commodi praesentium ab neque quae, suscipit deleniti iste aspernatur unde? Nobis saepe cupiditate corrupti, veritatis beatae odit dolore iusto, animi cumque repellendus repudiandae suscipit ducimus commodi illum! Praesentium id fuga quos at accusantium possimus ab tempora illum labore voluptate repellat fugiat deleniti nemo, eveniet repudiandae cupiditate distinctio repellendus ipsam. Rem ipsa labore minus esse. Alias.</p>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <h2 id="close" onclick="closePopup()">x</h2>
        <h2>Contact Us</h2>
        <a href="tel:+2348169748438">Phone Number: +2348169748438</a>
        <br>
        <a href="mailto:ofavourite001@gmail.com">Send us an email at:</a>
        <br>
    </div>

    <div class="container" id="vismiss">
        <div id="row2">
            <div id="vision">
                <center>
                    <h3>Our Vision</h3>
                </center>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eveniet ut voluptas reprehenderit ipsum culpa ex voluptatum a iste? Architecto exercitationem provident eaque voluptatem, tempora fugiat facilis hic pariatur at eligendi, repellat neque animi? Architecto aut reprehenderit adipisci corrupti maiores officia unde, officiis dignissimos dolore iste numquam tempore repellat in!</p>
            </div>
            <div id="mission">
                <center>
                    <h3>Our Mision</h3>
                </center>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat aspernatur ab unde laborum illum voluptatibus sint quae earum qui possimus amet adipisci ullam pariatur assumenda exercitationem fugiat alias, labore quibusdam aliquid nobis consequatur itaque! Praesentium, vel, atque distinctio labore molestias, suscipit eveniet vitae debitis officia quasi assumenda iste et?</p>
            </div>
        </div>
    </div>

    <footer>
        <h2 class="end-school-name">Some School</h2>
        <h6 class="socials">
            <a href="https://www.twitter.com/Fav_fantasy_" target=".blank" id="twitter"><i class="fa fa-3x fa-twitter-square"></i></a>
            <a href="https://www.github.com/Favourite101" target=".blank" id="github"><i class="fa fa-3x fa-github"></i></a>
            <a href="https://www.linkedin.com/in/favourtunmibi" target=".blank" id="linkedin"><i class="fa fa-3x fa-linkedin"></i></a>
            <a href="https://www.instagram.com/fav.fantasy" target=".blank" id="ig"><i class="fa fa-3x fa-instagram instagram"></i></a>
        </h6>
        <h6 class="cp">
            Copyright
            <span>&copy; 2023 Favour's SMS. All Rights Reserved</span>
        </h6>
    </footer>

    <script>
        const popup = document.querySelector('#contact');
        const body = document.querySelector('body');
        
        function openPopup()
        {
            body.classList.add('blurry');
            popup.classList.add('open-contact');
        }
        function closePopup()
        {
            popup.classList.remove('open-contact');
            body.classList.remove('blurry');
        }
    </script>
</body>
</html>