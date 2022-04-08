<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styling.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <title>Profile</title>
      <style>
          #container{
              margin-top: 100px;
              
          }
          
          #allNotes,#done,#notepad{
              display: none;
          }
          .buttons{
/*              margin-bottom: 40px;*/
          }
          #notepad{
              margin-top: 40px;
          }
          textarea{
              width: 100%;
              max-width: 100%;
              font-size: 16px;
              line-height: 1.5em;
              border-left-width: 20px;
              border-color: #CA3DD9;
              background-color: #FBFFFF;
              padding: 10px;
          }
          tr{
              cursor: pointer;
          }
      </style>
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
              <li><a href="#">Profile</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Contact Us</a></li>
                <li class="active"><a href="#">My Notes </a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#" >Logged In
                As <b>username</b></a></li>    
              <li><a href="#" >Log Out</a></li>
            </ul>
          </div>
        </div>
    </nav>
<!--      Contianer-->
<div class="container" id="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6"> 
        <h2>General Accoubt Settings:</h2>
            <div class="table-responsive" >
                <table class="table table-hover table-condensed table-bordered" >
                    <tr data-target="#updateusername" data-toggle="modal">
                    <td>UserName</td>
                     <td>VALUE</td>  
                    </tr>
                    <tr data-target="#updateemail" data-toggle="modal">
                    <td>Email</td>
                    <td>montyaswal0@gmail.com</td>
                    </tr>
                      <tr data-target="#updatepassword" data-toggle="modal">
                    <td>Password</td>
                    <td>hidden</td>
                    </tr>
                    
                </table>
            </div>
            
        </div>  
    </div>
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
<!-- Update username Form     -->
      <form method="post" id="updateusernameform">
         <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
               Edit Username:
              </h4>
          </div>
          <div class="modal-body">
<!--Updated  message-->
              <div id="updateusernamemsg"></div>
            
               <div class="form-group">
                <label form="updateusers" >Username:</label>
                <input class="form-control" type="text" name="username" placeholder="Username" id="username" maxlength="30" value="Username value"> 
                 </div>
             
            
             </div>

          </div>
          <div class="modal-footer">
              
              <input class="btn green" name="updateusername" type="submit" value ="Submit">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
          </div>
      </div>
  </div>

      
      </form>
      
<!--  Update email form-->
      
       <form method="post" id="updateemailform">
         <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
              Enter new Email
              </h4>
          </div>
          <div class="modal-body">
<!--Updated  message-->
              <div id="updateemailmsg"></div>
            
               <div class="form-group">
                <label form="upadateemail" >Email:</label>
                <input class="form-control" type="text" name="email" placeholder="Username" id="email" maxlength="50" value="Email Value"> 
                 </div>
             
            
             </div>

          </div>
          <div class="modal-footer">
              
              <input class="btn green" name="updateusername" type="submit" value ="Submit">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
          </div>
      </div>
  </div>

      
      </form>
      
<!--Foregt Password   -->
  
       <form method="post" id="updatepasswordform">
         <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
              Update Password
              </h4>
          </div>
          <div class="modal-body">
<!--Updated  message-->
              <div id="updatepasswordmsg"></div>
            
               <div class="form-group">
                <label form="currentpassword" class="sr-only">Your current password:</label>
                <input class="form-control" type="password" name="currentpassword" placeholder="Your Current Password" id="currentpassword" maxlength="30" > 
                 </div>
              
              <div class="form-group">
                <label form="newpassword" class="sr-only">Current Password:</label>
                <input class="form-control" type="password" name="newpassword" placeholder="New Password" id="newpassword" maxlength="30" > 
                 </div>
              
              <div class="form-group">
                <label form="newpassword2" class="sr-only"> Confirm password:</label>
                <input class="form-control" type="password" name="newpassword2" placeholder="Confirm Password" id="newpassword2" maxlength="30" > 
                 </div>
             
            
             </div>

          </div>
          <div class="modal-footer">
              
              <input class="btn green" name="updateusername" type="submit" value ="Submit">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
          </div>
      </div>
  </div>

      
      </form>
      
      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
<script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>