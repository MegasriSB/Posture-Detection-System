<!DOCTYPE html>
<html>

<head>
  <title>Signin Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <script src="https://kit.fontawesome.com/d70c1f6414.js" crossorigin="anonymous"></script>
  <script src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $("#login").click(function() {

        email = $("#email").val();
        password = $("#password").val();
        $.ajax({
          type: "POST",
          // pcheck file checks email and password and returns true or false
          url: "pcheck.php",
          data: "email=" + email + "&password=" + password,
          success: function(html) {
            if (html == 'true') {

              $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

              window.location.href = "dashboard.php";

            } else if (html == 'false') {
              $("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');


            } else {
              $("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
            }
          },
          beforeSend: function() {
            $("#add_err2").html("loading...");
          }
        });
        return false;
      });
    });
  </script>
  <style>
    .logo {
      position: absolute;
      width: 150px;
      height: 150px;
      right: -1%;
      top: -23px;
    }

    .heading {
      position: absolute;
      width: 720px;
      height: 303px;
      left: 0.5em;
      top: 3.5em;
      font-family: "Poppins";
      font-style: normal;
      font-weight: 700;
      font-size: 60px;
      line-height: 100px;
      text-align: center;
      color: #000000;
      line-height: 1.5em;
    }

    .fa-quote-left,
    .fa-quote-right {
      font-size: 50px;
    }

    .container .drop::before {
      content: "";
      position: absolute;
      top: 80px;
      left: 115px;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      background: #fff;
      opacity: 0.9;
    }

    .container .drop::after {
      content: "";
      position: absolute;
      top: 120px;
      left: 140px;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background: #fff;
      opacity: 0.9;
    }
  </style>
</head>

<body>
  <img class="logo" src="img/logo.png" alt="logo">
  <p class="heading"><i class="fa-solid fa-quote-left"></i> A good posture is your best accessory <i class="fa-solid fa-quote-right"></i></p>
  <div class="container" style="left:22%;">
    <div class="drop">
      <div class="content">
        <h2>Sign in</h2>
        <div id="add_err2"></div>
        <form role="form">
          <div class="inputBox">
            <input type="email" id="email" name="email" placeholder="Email">
          </div>
          <!-- <div class="clearfix"></div> -->
          <div class="inputBox">
            <input type="password" id="password" name="password" placeholder="Password">
          </div>
          <div class="inputBox">
            <input type="submit" id="login">
          </div>
        </form>
      </div>
    </div>
    <!-- <a href="#" class="btns">Forgot Password</a> -->
    <a href="register.php" class="btns signup">Signup</a>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>