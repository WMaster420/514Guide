<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		admin login
	</title>
	<style>
		.nav{
			color: white;
			margin: 10px;
			padding: 8px 16px;
			text-align: center;
			font-size: 16px;
			transition-duration: 0.3s;
			display: inline-block;
			cursor: pointer;
		}
		.nav1{
			background-color: white;
			color: black;
			border: 2px solid #00618a;
		}
		.nav:hover{
			background-color:#00618a;
			color: white;
		}
		.container3{
			position: relative;
			border: none;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		#header{
			background-color: #00204d;
			text-align: center;
			height: 115px;
			width: auto;
		}
		img.avatar2{
			width: 40%;
			border-radius: 50%;
		}
		.img{
			text-align: center;
            margin: 24px 0 12px 0;
		}
		.container{
			padding: 16px;
		}
		form{
			border: 3px solid #f1f1f1;
		}
		button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ff8533">
	<div class="container" id= "header">
		<h1 style="color: white; font-family: candara; font-size: 45px;">514Guide</h1>
		<p style="color: white; font-family: candara;">A basic Guide to the city of montreal</p>
	</div>
	<div class="container3">
		<button class="nav nav1" onclick="document.location='admin login form.html'">Admin Login</button>
		<button class="nav nav1" onclick="document.location= 'welcome page test.html'">Home</button>
	</div>
	<br><hr><br><br>
	<form>
	<div class="img">
		<img src="avatar2.png" alt="avatar2" class="avatar2">
	</div>
	<body>
  <main id="main-holder">
    <h1 id="login-header">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Login</h1>
    
    <div id="frm">
		<form action="process.php" method="post">
			<p>
				<label>
					Username
				</label>
				<input type="text" id="user" name="user" />

			</p>
			<p>
			<label>password</label>
			<input type="password" id="pass" name="pass" />
				</p>
			<p>
				<input type="submit" id="btn" value="login" />
			</p>

		</form>
    </div>
    
    
  
  </main>
</body>
</form>
</body>