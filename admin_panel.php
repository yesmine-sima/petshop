<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>ADMIN BOARD</title>

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
    <?php  if (isset($_SESSION['username'])) : ?>
    <div class="wrap">
        <form method="post" class="login-form" action="check.php">
            <div class="form-header">
                <h3>ADMIN BOARD</h3>
                <p>Here is the acces of yours</p>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button"><a href="display.php" style="text-decoration: none;"><font color="white">Pending Order</font></a></button>
            </div>
            <div class="form-group">
                <button class="form-button"><a href="product_update.php" style="text-decoration: none;"><font color="white">Product Insertion</font></a></button>
            </div>
            <div class="form-group">
                <button class="form-button"><a href="index.php?logout='1'" style="text-decoration: none;"><font color="white">LOGOUT NOW</font></a></button>
            </div>
            
            
    </div><!--/.wrap-->
        <?php endif ?>

</body>
</html>