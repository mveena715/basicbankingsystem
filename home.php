<html>
	<head>
	<title>E-Banking</title>
	<style>
	 .container{
	width: 620px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}


h3{
	color:#1f00a8;
	font-family: helvetica;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

button{
	width:380px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #ff474a;
	text-align: center;
	color:white;
}


button:hover {
  background: #a30003;
}

body{
	background-color: PaleTurquoise;
}
    body
    {
    background-color : PaleTurquoise ;
    </style>
	</head>
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
	<body>

	<div class="container">
		<h2 >The Home Page</h2>
		<h3> Welcome to E-Banking <?php Print "$user" ?></h3>
		<a href="logout.php" >Click Here to Logout.</a><br/>
		<br/><br/>
		<button type = "button" onclick="location.href='deposit.php'" >Deposit Money.</button>
		
		
		<button type = "button" onclick="location.href='withdraw.php'" >Withdraw Money.</button>
	
	
		<button type = "button" onclick="location.href='balance.php'" >Check Balance.</button>

	</div>
	</body>
	
</html>
