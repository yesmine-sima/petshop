<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>

      <style type="text/css">
        *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
html{
    height: 100%;
}
body{
    font-family: 'Segoe UI', sans-serif;;
    font-size: 1rem;
    line-height: 1.6;
    height: 100%;
}
body{
      background-image:url(images/back.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
.wrap {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.login-form{
    width: 350px;
    margin: 0 auto;
    border: 1px solid #ddd;
    padding: 2rem;
    background: #ffffff;
}
.form-input{
    background: #fafafa;
    border: 1px solid #eeeeee;
    padding: 12px;
    width: 100%;
}
.form-group{
    margin-bottom: 1rem;
}
.form-button{
    background: #69d2e7;
    border: 1px solid #ddd;
    color: #ffffff;
    padding: 10px;
    width: 100%;
    text-transform: uppercase;
}
.form-button:hover{
    background: #69c8e7;
}
.form-header{
    text-align: center;
    margin-bottom : 2rem;
}
.form-footer{
    text-align: center;
}

    </style>
</head>
<body>
    <div class="wrap">
        <form method="post" class="login-form" action="check.php">
            <div class="form-header">
                <h3>Registration Form</h3>
                <p>Register to access your dashboard</p>
            </div>
            <!--Username Input-->
            <div class="form-group">
                <input type="text" class="form-input" name="username" placeholder="username" value="<?php echo $username; ?>">
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="email" class="form-input" name="email" placeholder="email" value="<?php echo $username; ?>">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" class="form-input" name="password_1"  placeholder="password">
            </div>
            <!--PasswordConfirm Input-->
            <div class="form-group">
                <input type="password" class="form-input" name="password_2"  placeholder="password confirm">
            </div>
            <!--Logi
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" type="submit" name="reg_user">Login</button>
            </div>
            <div class="form-footer">
            Already a member? <a href="login.php">Log In</a>
            </div>
        </form>
    </div><!--/.wrap-->
</body>
</html>