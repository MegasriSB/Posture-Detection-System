<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            overflow-x:hidden;
        }

        ::-webkit-scrollbar{
            width:0px;
        }

        .logo {
            position: absolute;
            width: 150px;
            height: 150px;
            right: -1%;
            top: -23px;
        }

        .about-us{
            height: 100vh;
            width: 100%;
            padding: 90px 0;
            background: linear-gradient(116.92deg, #ffffff 3.08%, #faeab1 79.83%);
        }

        .pic{
            height: auto;
            width:  450px;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
        }

        .about{
            width: 1130px;
            max-width: 85%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .text{
            width: 540px;
        }

        .text h2{
            font-size: 70px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .text h5{
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 20px;
            font-style: italic;
        }

        span{
            color: #C58940;
            font-weight: 600;
            font-style: italic;
        }

        .text p{
            font-size: 18px;
            line-height: 25px;
            letter-spacing: 1px;
        }

        .data{
            margin-top: 30px;
        }

        /* .hire{
            font-size: 18px;
            background: #4070f4;
            color: #fff;
            text-decoration: none;
            border: none;
            padding: 8px 25px;
            border-radius: 6px;
            transition: 0.5s;
        }

        .hire:hover{
            background: #000;
            border: 1px solid #4070f4;
        } */

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
            top: 23px;
            left: -3px;
        }

    </style>
</head>

<body>
<img class="logo"src="img/logo.png" alt="logo">
<section class="about-us">
    <div class="about">
      <img src="img/protoype.jpg" class="pic">
      <div class="text">
        <h2>Erect Assistant</h2>
        <h5>Align your spine, feel just <span>fine!</span></h5>
          <p>Modern-day lifestyle is hugely dependent on computers as most of the work is directly or indirectly controlled by them. Our goal is to reduce the impact of cervical pain which being untreated can cause significant problems such as Sciatica, Cervical Spondylosis and so on. The system alarms the user with the buzzer sound when he/she sits in the same position for a long time or when he/she sits in an inappropriate position.


</p>
        <div class="data">
        <!-- <a href="#" class="hire">Hire Me</a> -->
        <a href="login.php" id="buttonn">Login</a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>