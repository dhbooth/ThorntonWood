<?php require('sas.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Member Login</title>
<style type="text/css">

	* {
		//border: 1px solid red;
	}

	.error {
		color:#A80000
	}

	body {
		font: 'Slabo 27px', serif;
		color:#404040;
		margin: 0;
		padding: 0;
		height: 100%;
		z-index: 0;
		background-image: url("/Users/davisbooth/Desktop/Thorton Wood/members.jpg");
		background-attachment: absolute;
	  background-position: center top;
	  background-repeat: no-repeat;
		background-size: 100%;
		height: 100%;
		padding: 0;
		margin: 0;
	}

	#background-color {
		background-color: rgba(0,0,0,.3);
		z-index: 1;
		height: 100%;
	}

	#wrapper {
		display: block;
		width:500px;
		height: 250px;
		top: 50% !important;
		left: 50% !important;
		margin-top: -200px !important;
		margin-left: -250px !important;
		position: absolute !important;
		//border:1px solid #606060;
		background-color: #f2f2f2;
		border-radius: .5em;
		z-index: 100;
	}

	#main {
		display: block;
		text-align:center;
		z-index: 100;
	}

	#header {
		display: block;
		border-top-left-radius: .2em;
		border-top-right-radius: .2em;
		font:bold 130% Verdana, Arial, sans-serif;
		color:#ffffff;
		width:100%;
		height:5em;
		text-align:center;
		background-color:#4d4d4d;
		line-height:5em;
		margin: 0;
		padding: 0;
		z-index: 100;
	}

	#mid {
		display: block;
		margin: 0;
		padding: 0;
		z-index: 100;
	}

	#footer {
		display: block;
		font-size:75%;
		color: #a2a2a2;
		text-align:center;
		width:100%;
		background-color: rgba(77, 77, 77, .8);
		position:fixed;
		bottom: 0;
		padding-bottom: .3%;
		padding-top: .3%;
	}

	a {
		text-decoration: none;
		color:inherit;
	}

	input {
		border:0px solid #606060;
		background-color: #e2e2e2;
		border-radius: .3em;
		height: 45px;
		width: 400px;
	}

	input:focus {
		outline: none;
	}

	#pw {
		margin-top: 3%;
		text-align: center;
	}

	#pw:focus {
	}

	#lg {
		text-transform: uppercase;
		font-size: 17px;
		font-weight: bold;
		letter-spacing: 1px;
		background-color: #75b135;
		color: white;
		cursor: pointer;
	}

	#lg:hover {
		background-color: #9bd062
	}

	#lg:focus {
		transform: scaleX(1.02) scaleY(1.02);
		background-color: #9bd062;
	}

	::placeholder {
		color: #4d4d4d;
	}

</style>
</head>
<body>
	<div id = "background-color"></div>
<div id="wrapper">
	<div id="header">Thornton Wood Member Login</div>
<div id="main">
	<div id="mid">
		<form action="member_home.html" method="POST">
			<input id = "pw" type="password" name="password" placeholder = "Password">
			<br>
			<br>
			<input id = "lg" type="submit" value="Login">
			<input type="hidden" name="sub" value="sub">
		</form>
		<div class=error><?=$msg?></div>
	</div>
</div>
</div>
<div id="footer">Authentication by <a href="http://www.zann-marketing.com/sas/">Simple Authorization Script</a> Copyright &copy; 2005.</div>
</body>
</html>
