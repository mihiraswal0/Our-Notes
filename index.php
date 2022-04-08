<?php
session_start();
include('connection.php');
include('logout.php');
include('rememberme.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styling.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <title>My Notes</title>
  </head>
  <body>
    <!-- Navigation bar -->
   
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top" >
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">Online Notes</a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#loginModal" data-toggle="modal">Login</a></li>
            </ul>
          </div>
        </div>
    </nav>
<!--      Jumbotron with signup -->
      <div class="jumbotron" id="myContainer">
          <h1>Online Notes App</h1>
          <p>Your Notes with you wherever you go.</p>
          <p>Easy to use, protects all your notes!</p>
          <button type="button" class="btn btn-lg green signup" data-target="#signupModal" data-toggle="modal">
              Sign up-It's Free
          </button>
          
        
      </div>
      <div class="footer">
        <div class="container">
            <p>Devloped By @Mihir Aswal 2022-
                <?php $today=date("Y");
                echo $today
                ?>
            </p>  
        </div>
      </div>
<!-- Login Form     -->
      <form method="post" id="loginform">
         <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
               Login:
              </h4>
          </div>
          <div class="modal-body">
<!--login message-->
              <div id="loginmessage"></div>
            
               <div class="form-group">
                <label form="loginemail" class="sr-only">Email:</label>
                <input class="form-control" type="email" name="loginemail" placeholder="Email Adress" id="loginemail" maxlength="30"> 
                 </div>
              <div class="form-group">
                <label form="password" class="sr-only">Password:</label>
                <input class="form-control" type="password" name="loginpassword" placeholder="Password" id="loginpassword" maxlength="30"> 
              </div>
              <div class="checkbox">
                <label>
                <input type="checkbox" name="rememberme" id="rememberme">       Remember Me
              </label>
                    <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgetpasswordModal" data-toggle="modal">
                Forget Password?
              </a>
              </div>  
             </div>

          </div>
          <div class="modal-footer">
               <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">
              Register button
            </button>
              <input class="btn green" name="login" type="submit" value ="Login">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
          </div>
      </div>
  </div>

      
      </form>
      
<!--  Signu up form-->
      <form method="post" id="signupform">
         <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Sign Up Today And Start Using Our Online Notes App!
              </h4>
          </div>
          <div class="modal-body">
<!--Signup message-->
              <div id="signupmessage"></div>
            <div class="form-group">
                <label form="username" class="sr-only">Username:</label>
                <input class="form-control" type="text" name="username" placeholder="Username" id="username" maxlength="30"> 
              </div>
               <div class="form-group">
                <label form="email" class="sr-only">Email:</label>
                <input class="form-control" type="email" name="email" placeholder="Email Adress" id="email" maxlength="30"> 
                 </div>
              <div class="form-group">
                <label form="password" class="sr-only">Choose A Password:</label>
                <input class="form-control" type="password" name="password" placeholder="Choose A Password" id="password" maxlength="30"> 
              </div>
              
               <div class="form-group">
                <label form="password2" class="sr-only">Confirm Password:</label>
                <input class="form-control" type="password2" name="password2" placeholder="Confirm Password" id="password2" maxlength="30"> 
              </div>
              
             </div>
          </div>
          <div class="modal-footer">
              <input class="btn green" name="signup" type="submit" value ="Sign up">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
          </div>
      </div>
  </div>

      
      </form>
      
<!--Foregt Password   -->
      <form method="post" id="foregtpasswordform">
         <div class="modal" id="forgetpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Forget Password?
              </h4>
          </div>
          <div class="modal-body">
<!--Forget message-->
              <div id="forgetpasswordmessage"></div>
            
               <div class="form-group">
                <label for="forgetemail" class="sr-only">Email:</label>
                <input class="form-control" type="email" name="forgetemail" placeholder="Email Adress" id="forgetemail" maxlength="30"> 
                 </div>
              
             </div>
          </div>
          <div class="modal-footer">
              <input class="btn green" name="forgetpassword" type="submit" value ="Submit">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
          </div>
      </div>
  </div>

      
      </form>
      
      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
      <script src="index.js"></script>
<script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--      <script src="index.js"></script>-->
  </body>
</html>