<?php include('server.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link rel="stylesheet" types="text/css" href="styles.css">
</head>

<body>
    <div class="header"><h2>Registration</h2></div>
        <form method="post" action="registration.php">
        <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" />
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>" />
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password"  />
            </div>
            <div class="input-group">
                <label>ConfirmPassword</label>
                <input type="password" name="confirm_password"  />
            </div>
            
            <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
            </div> 
            <p>Already a member? <a href="login.php">login</a></p>
        </form>
    
    </body>
</html>