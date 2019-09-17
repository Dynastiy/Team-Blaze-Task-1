<?php
//function for validating users registeration
function validate_user($user) {
    $errors = [];


    if(is_blank($user['email'])) {
      $errors[] = "Email cannot be blank.";
    } 
     elseif (!has_valid_email_format($user['email'])) {
      $errors[] = "Email must be a valid format.";
    }

    
      if(is_blank($user['password'])) {
        $errors[] = "Password cannot be blank.";
      } elseif (!has_length($user['password'], array('min' => 6))) {
        $errors[] = "Password must contain 6 or more characters";
      }

      if(is_blank($user['confirm_password'])) {
        $errors[] = "Confirm password cannot be blank.";
      } elseif ($user['password'] !== $user['confirm_password']) {
        $errors[] = "Password and confirm password must match.";
      }
    
    return $errors;
  }



function insertUser($user){
    global $db;
    
    $errors = validate_user($user);
    if(!empty($errors)){
        return $errors;
    }

    $hashed_password=password_hash($user['password'], PASSWORD_BCRYPT);
	$sql = "INSERT INTO user ";
	$sql .= "(email,password)";
	$sql .= "VALUES (";

	$sql .= "'" . db_escape($db, $user['email']). "',";
	$sql .= "'" . db_escape($db, $hashed_password). "'";
	$sql .= ")";

	$result = mysqli_query($db, $sql);
	confirm_result_set($result);

	if($result){
       
        return true;
    }
	else{
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
    }
    }


    function find_user_by_email($email){
      global $db;
    
      $sql = "SELECT * FROM user ";
      $sql .= "WHERE email='". db_escape($db, $email)."'";
      $sql .= "LIMIT 1";
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
      $user=mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $user;
    }

?>