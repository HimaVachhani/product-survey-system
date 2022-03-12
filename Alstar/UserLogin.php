<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <script type="text/javascript">
      function ValidUser() {
        var UserName=document.getElementById('UserName').value;
        var Password=document.getElementById('Password').value;
        var Err=document.getElementById('error');

        var pattern1="^[A-Za-z0-9]{2,50}$";
        var pattern2="^[A-Za-z0-9@$]{2,50}$";
        var reg=new RegExp(pattern1);
        if (!reg.test(UserName)) {
          Err.innerHTML="invalid User Name";
          return false;
        }
        reg=new RegExp(pattern2);
        if (!reg.test(Password)) {
          Err.innerHTML="invalid Password";
          return false;
        }
      }
    </script>
</head>
<body style="background-image:url(../images/abstract.webp);background-color: #cccccc">
  <div class="container">
      <div class="row">
        <div class="col-md-3">
          
        </div>
        <form action="con_UserLogin.php" method="post" onsubmit="return ValidUser()">
          <div class="col-md-6" style="text-align: center">
          <h2 style="color: white;padding-top: 80px">Login</h2>
          
          <?php
            if (isset($_GET['login'])) {
          ?>
            <p class="bg-danger" style="background-color: red;color: white">Please enter valid UserName or Password</p>  
          <?php
            }
          ?>
          <br>
          <div id="error" style="color: red" ></div>
          <label>Enter User Name:<b style="color: red">*</b></label>
          <input type="text" name="UserName" id="UserName" style="text-shadow: blue" required><br><br>
          <label >Enter Password:<b style="color: red">*</b></label>
          <input type="text" name="Password" id="Password" style="text-shadow: blue" required><br><br>
          &nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit">Login</button><br><br>
          <a href="NewUser.php" class="btn btn-info">Click Here For New Account</a>
        </div> 
        </form>
      </div>  
  </div>
</body>
</html>