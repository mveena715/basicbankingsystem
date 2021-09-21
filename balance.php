<html>
	<head>
	<title>Money in the Bank</title>
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
		<h2 >The Balance Page</h2>
		<h3> Hello <?php Print "$user" ?></h3>
		<a href="home.php" >Click Here to Go Back.</a><br/>
		<br/><br/>
		<?php 
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("ATM") or die("Cannot connect to database");
			$balance=0.00;
			$query=mysql_query("SELECT * from Passbook WHERE user='$user'");
			while($row=mysql_fetch_array($query))
			{
				$balance= $balance + $row['amount'];
			}
			Print "Your Balance is : UGX  " . $balance;

		 ?>



	</div>
	</body>
	
</html>
