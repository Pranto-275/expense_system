<?php
session_start();
global $connection;
include 'connection.php';
$message = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if (isset($_POST['login'])){

       $email = $_POST['email'];
       $password = $_POST['password'];

        if (empty($email) || empty($email)){
            $message = "Field Should Not Be Field!";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $message = "Invalid Email";
        }else{

            $login_check_query = "SELECT * FROM users WHERE email = '$email'";
            $login_check_query_result = mysqli_query($connection,$login_check_query);
            $data = mysqli_fetch_assoc($login_check_query_result);
            $hashpass = $data['password'];

            if ($login_check_query_result && password_verify($password,$hashpass)){

                if($email == $data['email']){
                    $_SESSION['full_name'] = $data['full_name'];
                    $_SESSION['user_id'] = $data['user_id'];
                    header('Location:dashboard.php');
                }else{
                    $message = "Email Mismatch!";
                }
            }else{
                $message = "Password Can't Verify!!";
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
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div id="loginhome">
        <div class="login">
            <h3 class="py-4">Daily Expense Tracker</h3>
                <div class="box">
                    <h6 class="text-center text-danger"><?php echo $message; ?></h6>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                          <label  class="form-label">Email address</label>
                          <input type="email" class="form-control" name="email">
                         
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" name="login" class="btn w-100" style="background-color: #4942E4;"><b>Login</b></button>
                        <div style="text-align: center;color: black;">
                            <a style="color:black;" href="register.php">Create your Account...</a>
                        </div>
                      </form>
                </div>
            
        </div>
    </div>

    
   <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>