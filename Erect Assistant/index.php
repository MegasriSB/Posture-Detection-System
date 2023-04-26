<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <script src="https://kit.fontawesome.com/d70c1f6414.js" crossorigin="anonymous"></script>
    <title>Main Page</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

        body {
        position: relative;
        background: linear-gradient(116.92deg, #ffffff 3.08%, #faeab1 79.83%);
        overflow-x: hidden;
        }

        .logo {
        position: absolute;
        width: 150px;
        height: 150px;
        right: -1%;
        top: -30px;
        }

        .heading {
        position: absolute;
        width: 720px;
        height: 303px;
        left: 1.5em;
        top: 1.2em;
        font-family: "Poppins";
        font-style: normal;
        font-weight: 700;
        font-size: 60px;
        line-height: 100px;
        text-align: center;
        color: #000000;
        line-height: 1.5em;
        }

        .hero {
        position: absolute;
        width: 576px;
        height: 540px;
        left: 49em;
        top: 6.5em;
        filter: drop-shadow(4px 8px 4px rgba(0, 0, 0, 0.25));
        }

        .title {
        position: absolute;
        width: 649px;
        height: 79px;
        left: 2.8em;
        top: 10em;
        font-family: "Poppins";
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        line-height: 60px;
        text-align: center;
        color: #000000;
        }

        .fa-quote-left,
        .fa-quote-right {
        font-size: 50px;
        }

        #buttonn:hover {
            background: #ffffff;
            background-image: -webkit-linear-gradient(top, #ffffff, #FAEAB1);
            background-image: -moz-linear-gradient(top, #ffffff, #FAEAB1);
            background-image: -ms-linear-gradient(top, #ffffff, #FAEAB1);
            background-image: -o-linear-gradient(top, #ffffff, #FAEAB1);
            background-image: linear-gradient(to bottom, #ffffff, #FAEAB1);
            text-decoration: none;
        }
        #buttonn {
            -webkit-border-radius: 10;
            -moz-border-radius: 10;
            border-radius: 100px;
            font-family: Arial;
            color: #000000;
            font-size: 20px;
            padding: 11px 40px 12px 40px;
            border: solid #000000 3px;
            text-decoration: none;
            position: relative;
            top: 530px;
            left: 340px;
        }
        /* .about{
            position: relative;
            top: 600px;
        }
        
        .abt{
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            position: relative;
            left: 120px;
        } */


        ::-webkit-scrollbar{
            width:0px;
        }
    </style>
</head>
<body>
    <img class="logo"src="img/logo.png" alt="logo">
    <p class="heading"><i class="fa-solid fa-quote-left"></i> Let your posture be your profit and not your punishment <i class="fa-solid fa-quote-right"></i></p>
    <img class="hero" src="img/hero.png" alt="">
    <p class="title">Erect Assistant </p>
    <!-- <button id="buttonn">Get Started</button> -->
    <a href="about.php" id="buttonn">Get Started</a>
    <!-- <div class="about" id = "about">
    <h1 class = "abt">About</h1>
    </div> -->
</body>
</html>