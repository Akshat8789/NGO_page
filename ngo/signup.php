<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/signup.css" />
</head>

<body>
  <!-- <div><a href=""><img src="img/cross.png" alt=""></a></div> -->
  <div class="container">
    <div class="center">
      <center>
        <img src="img/logo.png" alt="">
      </center>
      <h1>Register</h1>
      <form method="POST" action="signup_connect.php">
        <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>Name</label>
        </div>
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="phone_no" name="phone_no" required>
          <span></span>
          <label>Phone Number</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="cpassword" required>
          <span></span>
          <label>Confirm Password</label>
        </div>
        <input name="submit" type="Submit" value="Sign Up" onclick>
        <div class="signup_link">
          Have an Account ? <a href="login.php">Login Here</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>