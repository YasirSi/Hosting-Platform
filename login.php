<?php
    
    require_once('class/Dbcon.php');
    require_once('class/User.php');


    $dbConnect = new dbConnect();

    if(isset($_POST['submit']))
    {
        $name = isset($_POST['name']) ? ($_POST['name']) : "";
		$mobile = isset($_POST['mobile']) ? ($_POST['mobile']) : "";
		$email = isset($_POST['email']) ? ($_POST['email']) : "";
        $password = isset($_POST['password']) ? ($_POST['password']) : "";
        $repassword = isset($_POST['confirmpassword']) ? ($_POST['confirmpassword']) : "";
        //echo $name, $mobile, $email ,$password, $repassword;

        $user = new user();
        
        $sql = $user->signup($username, $name, $mobile, $password, $repassword, $dbConnect->connect);
        echo $sql;
    }  
    elseif(isset($_POST['already']))
    {
        header("Location:login.php");
    }
    elseif(isset($_POST['home']))
    {
        header("Location: index.php");
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
      <div>
	        <?php include('header.php'); ?>
	  </div>
		<!---login--->
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
								<div class="col-md-6 login-left">
									 <h3>new customers</h3>
									 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									 <a class="acount-btn" href="account.php">Create an Account</a>
								</div>
								<div class="col-md-6 login-right">
									<h3>registered</h3>
									<p>If you have an account with us, please log in.</p>
									<form>
									  <div>
										<span>Email Address<label>*</label></span>
										<input type="text"> 
									  </div>
									  <div>
										<span>Password<label>*</label></span>
										<input type="password"> 
									  </div>
									  <a class="forgot" href="#">Forgot Your Password?</a>
									  <input type="submit" value="Login">
									</form>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
          <div>
			 <?php include('footer.php'); ?>
			</div>
</body>
</html>