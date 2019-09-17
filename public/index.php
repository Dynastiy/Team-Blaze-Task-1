<?php
require_once("../private/initialize.php");
require_login();

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
    <div class="btn btn-success">
        <h1 style= "color:white">CONGRATULATIONS YOU HAVE NOW LOGGED IN</h1>
    </div>
    
    <h6 style= "color:white">Dry Page? Click here to logout</h6>
      <a class="btn btn-danger button" href="logout.php"
      role="button" style= "color:white">logout</a>

</body>
</html>