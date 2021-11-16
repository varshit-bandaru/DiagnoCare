<!DOCTYPE html>
<html>
	<head>
		<title>Diagno Care</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/diagno/bootstrap/dist/css/bootstrap.css">
		<style type="text/css">
			html,body{
				height:100%;
				background-image: url('http://localhost/diagno/application/public/images/wallpaper.PNG');
			}
			.login_div{
				text-align: center;
				margin:7% 0px 0px 0%;
				border:1px solid;
				padding:40px 40px 25% 40px;
			}
			.submit{
				color:white;
				background-color: blue 
			}
			.loginmaindiv{
				width:30%;
				border-radius: 7px !important;
				box-shadow: 0px 0px 7px blue;
				margin-left:35%;
				
			}
			.label{
				font-size: 	20px
			}		
		</style>
	</head>
	<body style="">
		<form method="post" action="http://localhost/diagno/index.php/diagno/logincheck" >
			<div class="loginmaindiv" >
				<div style="" class="login_div">
					<h3>LOGIN </h3>
					<br>	<br>	
			  		<div class="form-group">
			    		<label for="username" class="label">Username</label>
			    		<br>	
			    		<input type="text" name="username" class="form-control" id="username" placeholder="Username">
			  		</div>
			  		<br>
			  		<div class="form-group">
				    	<label for="password" class="label">Password</label>
				    	<br>	
				    	<input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  		</div>
			  		<div class="form-group">
				    	<br><br><br>
				    	<input type="submit" class="form-control submit" name="submit"  value="SUBMIT">				    	
			  		</div>
			  	</div>
		  	</div>
		</form>
	</body>
</html>