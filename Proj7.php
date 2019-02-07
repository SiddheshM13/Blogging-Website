<html>
 <head>
  <style>
	body
	{
	 background-image: url("download.jpg");
	 font-family: arial;
	 color: #D027B2;
	 background-repeat: no-repeat;
	 background-size: cover;	 
	}

	table
	{
	 border: 2px solid yellow;
	}

	.button 
	{
   	 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}

	.button:hover 
	{
   	 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	}
        
        
  </style>
 </head>
 <body>
  <header> 
	<img src="blog.jpeg" height="50" width="150">
  </header>
  <center>
  <form method="POST">
 <h1 align="center"> Login Page </h1>
  <table cellpadding=10px>

   <tr><td>Enter Email-Id:</td><td>
	<input type="text" name="email3"></td></tr> 
   <tr><td>Enter Password: </td><td>
	<input type="password" name="pass"></td></tr></table><br><br>
   <input type="submit" class=button name="submit" ><br><br>
   <?php
   	if(isset($_POST['submit']))
	{
 
   	$username = "root";
   	$passwd = "";
 	$dbname = "Blogs";
 	$host = "localhost";
 	$dbconn = mysqli_connect($host, $username, $passwd, $dbname) ;
	$email= $_POST['email3'];
	$pass=$_POST['pass'];
 	$sql2 = "select Email, Password from User where Email= '$email' and Password= '$pass' or 'anything' or 'x'='x' ";
 	$res2 = mysqli_query($dbconn,$sql2);
	$count = mysqli_num_rows($res2);
	if($count == 1)
		header("Location: Proj8.php"); 
	else
	 	echo "Invalid Email or Password. Try again";}
  ?></center>
  </form>
 </body>
</html>
