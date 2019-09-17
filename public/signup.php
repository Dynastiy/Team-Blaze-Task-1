<?php
require_once("../private/initialize.php");
if(is_post_request()){
$user=[];
$user['email']=$_POST['email'] ?? '';
$user['password']=$_POST['password'] ?? '';
$user['confirm_password']=$_POST['confirm_password'] ?? '';

$result=insertUser($user);
 if($result === true){
     redirect_to(url_for('login.php'));
 }
 else{
     $errors=$result;
 }
}
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <title>HNG Internship 6.0</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
          <div class='col-sm login'>
              <div class='login-form'>
                <h3 class='header' style= "color:white" >SIGNUP</h3>
                <br />
                <div class='login-text'>
                  <h3 style= "color:white">Welcome!</h3>
                   <p style= "color:white">Signup by entering the the information below</p>
                </div>
                <?php if($errors){?>
                   
                <div class="btn btn-danger"> <?php  echo display_errors($errors);?></div>
                  
               <?php } ?>
               
                <form action="signup.php" method="POST">
                  <div class="form-group">
                    <label for="email" style= "color:white">Email address:</label>
                    <div class='form-field'>
                      <input type="email" class="form-control" id="email" 
                      placeholder="kelvinkent@gmail.com" name="email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" style= "color:white">Password:</label>
                    <div class='form-field'>
                       <input type="password" class="form-control" id="password"required name="password"
                       placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" style= "color:white">Confirm Password:</label>
                    <div class='form-field'>
                       <input type="password" name="confirm_password" class="form-control"required id="password" placeholder="Confirm_Password">
                    </div>
                  </div>
                  <button class="btn btn-primary button" type="submit"
      role="button" style= "color:white">SignUp</button>
                  <br/>
                    <div class='button-pair'>
<h6 style= "color:white">Already SignUp? Click here</h6>
      <a class="btn btn-primary button" href="login.php"
      role="button" style= "color:white">Login</a>
                     
                    </div>
                </form>
              </div>
            </div>
      </div>
      <div class="col-md-3"></div>
      
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>