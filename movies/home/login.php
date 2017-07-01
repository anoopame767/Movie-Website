<?php
   include("config.php");
   session_start();
   
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM userprofile WHERE name = '$myusername' and password = '$mypassword'";
	  
      $result = mysqli_query($db,$sql);		
		
		
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
		if($count == 1) {
				 //$_SESSION("myusername");
			 $_SESSION['login_user'] = $myusername;  
			 header("location: index.php");	
		}
		else{
			 echo "<script type=\"text/javascript\">window.alert('enter valid credentials.');</script>"; 
		}
	}
?>
<html>
   
   <head>
      
	  <head>
		  <meta charset="UTF-8">
		<title>Movies - Login Page</title>
		  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		  
		  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

		  <link rel="stylesheet" href="../css/style.css">
  
</head>

	  
<body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="../js/index.js"></script>

  <div class="cont">
  <div class="demo">
		<div class="login">
		  <div class="login__check">
		  </div>
		  
		  <div class="login__form">
			<form action = "" method = "post">
					<div class="login__row">
					  <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
						<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
					  </svg>
					  <input type="text" class="login__input name" name = "username" placeholder="Username"/>
					</div>
					<div class="login__row">
					  <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
						<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
					  </svg>
					  <input type="password" class="login__input pass" name = "password" placeholder="Password"/>
					</div>
					<button type = "submit" value = "Submit" class="login__submit">Sign in</button>
					<p class="login__signup">Don't have an account? &nbsp;<a href="signup.php">Sign up</a></p>
			</form>
		  </div>
		  
		</div>     
    </div>
  </div>
</body>
</html>
	
      