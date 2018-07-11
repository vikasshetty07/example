<?php include('server.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" types="text/css" href="styles.css">
</head>

<body>
    <div class="header"><h2>Login</h2></div>
        <form method="post" action="login.php">
        <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" />
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" />
            </div>
            
            <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
            </div> 
            <p>Want to signUp? <a href="registration.php">Register</a></p>
        </form>
    
    </body>
</html>