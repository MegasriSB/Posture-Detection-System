<!DOCTYPE html>
<html>

<head>
  <title>Signup Page</title>
  <link rel="stylesheet" type="text/css" href="styles1.css" />
  <script src="https://kit.fontawesome.com/d70c1f6414.js" crossorigin="anonymous"></script>
  <script src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $("#register").click(function() {
        // the values of the form is stored in the variables when the submit button is clicked

        fname = $("#fname").val();
        lname = $("#lname").val();
        email = $("#email").val();
        password = $("#password").val();

        $.ajax({
          type: "POST",
          url: "adduser.php",
          data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
          // validation whether error or success
          success: function(html) {
            if (html == 'true') {

              $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');
              //  redirects to index page after successfull registration in the below code
              window.location.href = "login.php";

            } else if (html == 'false') {
              $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');

            } else if (html == 'fname') {
              $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');

            } else if (html == 'lname') {
              $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

            } else if (html == 'eshort') {
              $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

            } else if (html == 'eformat') {
              $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');

            } else if (html == 'pshort') {
              $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
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
      left: 0em;
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
      top: 50px;
      left: 125px;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      background: #fff;
      opacity: 0.9;
    }

    .container .drop::after {
      content: "";
      position: absolute;
      top: 75px;
      left: 160px;
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
  <p class="heading"><i class="fa-solid fa-quote-left"></i> Always walk with style and finesse <i class="fa-solid fa-quote-right"></i></p>
  <div class="container">
    <div class="drop">
      <div class="content">
        <h2>Sign up</h2>
        <div id="add_err2"></div>
        <hr>
        <form role="form" method="post">
          <div class="inputBox">
            <input type="text" id="fname" name="fname" placeholder="First Name">
          </div>
          <div class="inputBox">
            <input type="text" id="lname" name="lname" placeholder="Last Name">
          </div>
          <div class="inputBox">
            <input type="email" id="email" name="email" placeholder="Email">
          </div>
          <!-- <div class="clearfix"></div> -->
          <div class="inputBox">
            <input type="password" id="password" name="password" placeholder="Password">
          </div>
          <div class="inputBox">
            <input type="submit" id="register" value="Submit" />
          </div>
        </form>
      </div>
    </div>
    <a href="login.php" class="btns">Login</a>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>