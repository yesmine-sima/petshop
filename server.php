<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$address = "";
$mobile_no = "";
$money = "";
$ids = "";
$name = "";
$price="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'shop');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: cart.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $row =mysqli_fetch_assoc($results);////addd
     $_SESSION['user_id']=""; ///addd
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['user_id'] = $row['user_id']; ///addd
      $_SESSION['success'] = "You are now logged in";
      header('location: cart.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}




////store address

if (isset($_POST['buy'])) {
  // receive all input values from the form
  $u_id = $_SESSION['user_id'];
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $mobile_no = mysqli_real_escape_string($db, $_POST['mobile_no']);
  $money = mysqli_real_escape_string($db, $_POST['money']);
  $ids = mysqli_real_escape_string($db, $_POST['ids']);
  


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($address)) { array_push($errors, "Username is required"); }
  if (empty($mobile_no)) { array_push($errors, "Email is required"); }
  $qry = "INSERT INTO shop.order (uid,address,mobile_no,amount,ids) 
          VALUES('$u_id','$address', '$mobile_no','$money', '$ids')";
  mysqli_query($db, $qry);

    //insert data into product details table
  $qry="INSERT INTO product_status (o_id,uid) SELECT o_id,'$u_id' FROM shop.order WHERE mobile_no = '$mobile_no'";
  $result=mysqli_query($db,$qry);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You Have Successfully Placed Order";
    header('location: checkout.php');
  }













// LOGIN USER
if (isset($_POST['adm'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: admin_panel.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>