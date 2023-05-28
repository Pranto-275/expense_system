<?php
global $connection;
include 'connection.php';
$message = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // echo $fullname.$email.$phone.$password;

    if(empty($fullname) || empty($email) || empty($phone) || empty($password)){
      $message = "Field Should Be Field!!";

    }else if(!preg_match("/^[a-zA-Z-' ]*$/",$fullname)){
      $message = "Only Letters will be Accepted";

    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $message = "Invalid Email";

    }else if($password != $cpassword){
      $message = "Password Mismatch!";
    }else{
      $user_unique_id = rand(10000,99999);
      $password = password_hash($password,PASSWORD_DEFAULT);

      $register_user_query = "INSERT INTO users (user_id,full_name,email,password) VALUES ('$user_unique_id','$fullname','$email','$password')";
      $register_user_query_reuslt = mysqli_query($connection,$register_user_query);
      if ($register_user_query_reuslt == 'true'){
        $message = "Register User Successfully";
      }else{
        $message = "Something Went Wrong!!";
      }
    }

  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Users</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div id="loginhome">
    <div class="login">
      <h3 class="py-4">Daily Expense Tracker</h3>

        <div class="box">
          <h6 class="text-center text-danger"><?php echo $message; ?></h6>
          <form action="register.php" method="POST">
            <div class="mb-3">
              <label class="form-label">Full name</label>
              <input type="text" class="form-control" name="fullname">

            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">

            </div>
            <div class="mb-3">
              <label class="form-label">Phone</label>
              <input type="number" class="form-control" name="phone">

            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="cpassword">
            </div>

            <button type="submit" class="btn w-100" style="background-color: #4942E4;" name="submit"><b style="color: white">Submit</b></button>

            <div style="text-align: center;color: black;">
              <a style="color:black;" href="login.php">Have an Account...</a>
            </div>
          </form>
        </div>

    </div>
  </div>


  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>