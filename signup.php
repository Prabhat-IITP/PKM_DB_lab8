<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <label>First Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="first_name" 
                      placeholder="First_Name"
                      value="<?php echo $_GET['First_Name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="last_name" 
                      placeholder="First Name"><br>
          <?php }?>
          <label>Last Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="last_name" 
                      placeholder="Last Name"
                      value="<?php echo $_GET['Last_Name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="last_name" 
                      placeholder="Last Name"><br>
          <?php }?>
          <label>User Name</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>
     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>
          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form></body></html>

