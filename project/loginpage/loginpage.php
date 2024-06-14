<?php

session_start();
$error = "";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_SESSION['uid'])) {
   header("Location:../index.php");
} else {
   if (isset($_POST['SignIn'])) {
      
      $username = $_POST['username'];
      $password = $_POST['password'];

      if (empty($username) || empty($password)) {
         $error = "Please fill all the fields";
      }

      if (empty($error)) {
         require_once "../backend/database.php";
         $connection = new Connection();
         $error = $connection->login($username, $password);

         if ($error === true) {
            $_SESSION['uid'] = $username;
            header("Location:../index.php");
         }
      }
   }

   elseif (isset($_POST['SignUp'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $repassword = $_POST['repassword'];
      $phone = $_POST['phone'];

      if (empty($username) || empty($email) || empty($password) || empty($repassword) || empty($phone)) {
         $error = "Please fill all the fields";
      }

      if ($password != $repassword) {
         $error = "Passwords do not match";
      }

      if (empty($error)) {
         require_once "../backend/database.php";
         $connection = new Connection();
         $error = $connection->signup($username, $email, $phone, $password);
      }
   }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="login.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" class="sign-in-form" method="post">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                type="text"
                placeholder="Username"
                required
                name="username"
              />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                placeholder="Password"
                required
                name="password"
              />
            </div>

            <!-- error -->

            <p style="color: red;"><?php echo $error; ?></p>

            <input
              type="submit"
              value="Login"
              class="btn solid"
              name="SignIn"
            />

            <p class="social-text">Or Sign in with</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>

          <form action="" class="sign-up-form" method="post">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                type="text"
                placeholder="Username"
                required
                name="username"
              />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" required name="email" />
            </div>

            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input
                type="number"
                placeholder="Phone"
                required
                name="phone"
              />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                placeholder="Password"
                required
                name="password"
              />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                placeholder="Re-enter Password"
                required
                name="repassword"
              />
            </div>

            <!-- show error -->
             <p style="color: red;"><?php echo $error; ?></p>


            <input
              type="submit"
              value="Sign Up"
              class="btn solid"
              name="SignUp"
            />

            <p class="social-text">Or Sign up with</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <img src="../logo-removebg-preview.png" alt="" />

            <h3>New here?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
              minus natus est.
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign Up</button>
          </div>
        </div>

        <div class="panel right-panel">
          <div class="content">
            <img src="../logo-removebg-preview.png" alt="" />
            <h3>One of us?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
              minus natus est.
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign In</button>
          </div>
        </div>
      </div>
    </div>

    <script src="login.js"></script>
  </body>
</html>
