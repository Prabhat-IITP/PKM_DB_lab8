<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    include "db_conn.php";
if (isset($_POST['cu']) && isset($_POST['nu'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$cu = validate($_POST['cu']);
	$nu = validate($_POST['nu']);
    if(empty($cu)){
      header("Location: change-username.php?error=Current email is required");
	  exit();
    }else if(empty($nu)){
      header("Location: change-username.php?error=New email is required");
	  exit();
    }else if($cu == $nu){
      header("Location: change-username.php?error=The new email and old email are exact same");
	  exit();
    }else {
    	// hashing the username
    	// $cu = md5($cu);
    	// $nu = md5($nu);
        $id = $_SESSION['id'];
        $sql = "SELECT user_name
                FROM users WHERE 
                id='$id' AND user_name='$cu'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	$sql_2 = "UPDATE users
        	          SET user_name='$nu'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: change-username.php?success=Your email has been changed successfully");
	        exit();
        }else {
        	header("Location: change-username.php?error=Incorrect email");
	        exit();
        }
    }
}else{
	header("Location: change-username.php");
	exit();
}
}else{
     header("Location: index.php");
     exit();
}