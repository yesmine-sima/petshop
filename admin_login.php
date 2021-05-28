<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>The Login Form</title>

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
      background-image:url(images/update.jpg);
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
        <form method="post" class="login-form" action="admin_login.php">
            <div class="form-header">
                <h3>ADMIN LOGIN</h3>
                <p>Login to access your dashboard</p>
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="text" class="form-input" name="username" placeholder="username">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" class="form-input" name="password" placeholder="password">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" type="submit" name="adm">Login</button>
            </div>
        </form>
    </div><!--/.wrap-->
</body>
</html>