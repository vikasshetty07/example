<?php include('server.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link rel="stylesheet" types="text/css" href="styles.css">
</head>

<body>
    <div class="header"><h2>Home page</h2></div>
       <div class="content">
		   <?php if(isset($_SESSION['success'])): ?>
               <div class="success">
                   <h3>
					   <?php echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                   </h3>
               </div>
		   <?php endif ?>
           <?php if(isset($_SESSION['username'])): ?>
              <p>Welcome <?php echo $_SESSION['username']; ?></p>
              <p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
		   <?php endif ?>
       </div>
	   
    
    </body>
</html>