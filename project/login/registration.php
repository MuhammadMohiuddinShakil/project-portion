<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
<?php
    require('db_connect.php');
    if (isset($_REQUEST['username'])) {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $cell     = $_POST['cell'];
        $create_datetime = date("Y-m-d H:i:s");
        $result = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='form'>
                  <h3>Email Alreaddy Exist!!!!</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";

            
  
        }else if($_POST['password'] !== $_POST['repassword']){
            echo "<div class='form'>
                  <h3>password did not match.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }else {
            $query    = "INSERT into `users` (username, password, email, cell, create_datetime)
                        VALUES ('$username', '" . md5($password) . "', '$email','$cell', ' $create_datetime')";
            $result   = mysqli_query($con, $query);
        
            if ($result) {
                echo "<div class='form'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
            }else {
                echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                    </div>";
            }

        }


    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="email" class="login-input" name="email" placeholder="Email Adress" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="password" class="login-input" name="repassword" placeholder="Type password again" required />
        <input type="tel" class="login-input" name="cell" pattern="[0-9]{11}" placeholder="Phone number">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
