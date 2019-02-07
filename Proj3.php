<html>
<head>
  <style>
	body
	{
	 background-image: url("image.jpg");
	 font-family: georgia;
	 color: yellow;
	 background-repeat: no-repeat;
	 background-size: cover;
	 font-size: 20px;
	 overflow-y: hidden;	 
	}
	
	table
	{
	 border: 2px solid yellow;
	 border-collapse: collapse;
	}

	.button 
	{
 	 background-color: #4CAF50;
	 border: none;
    	 color: white;
    	 padding: 15px 32px;
    	 text-align: center;
    	 text-decoration: none;
    	 display: inline-block;
    	 font-size: 16px;
    	 margin: 4px 2px;
    	 cursor: pointer;
    	 -webkit-transition-duration: 0.4s; 
     	 transition-duration: 0.4s;
	}

	.button 
	{
	 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}

	.button:hover 
	{
    	 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	}

	a.button 
	{
 	 display: inline-block;
 	 border-radius: 4px;
 	 background-color: #f4511e;
 	 border: none;
 	 color: #FFFFFF;
 	 text-align: center;
 	 font-size: 15x;
 	 padding: 10px;
 	 width: 100px;
 	 transition: all 0.5s;
 	 cursor: pointer;
 	 margin: 5px;
	 border: 1px solid yellow;
	}

	a.button span 
	{
	 cursor: pointer;
  	 display: inline-block;
 	 position: relative;
 	 transition: 0.5s;
	}

	a.button span:after 
	{
 	 content: '\00bb';
 	 position: absolute;
 	 opacity: 0;
	 top: 0;
  	 right: -10px;
	 transition: 0.5s;
	}

 	a.button:hover span 
	{
	 padding-right: 15px;
	}

	a.button:hover span:after 
	{
  	 opacity: 1;
  	 right: 0;
	}

  </style>
 </head>
 <body>
  <header> 
	<img src="blog.jpeg" height="50" width="150"></td>
  </header>
  <center>
  <?php 
   	$username = "root";
   	$passwd = "";
 	$dbname = "Blogs";
 	$host = "localhost";
 	$dbconn = mysqli_connect($host, $username, $passwd, $dbname) ;
 	$name = $_POST["name"];
 	$email = $_POST["email"];
 	$gender = $_POST["gender"];
 	$age = $_POST["age"];
 	$blogname = $_POST["blogname"];
 	$blogtype = $_POST["blogtype"];
 	$description = $_POST["description"]; 
 	$sqli = "insert into User values('$name', '$email', '$gender', '$age', '$blogname', '$blogtype', '$description')";
 	$res = mysqli_query($dbconn, $sqli);  
 	if ($res)
 		echo "<h1> Profile created successfully </h1> ";
 	else
 		echo "<h2> Email ID already in use. Please enter another. <h2>";
  ?> 
  <hr>
  <h2 align=center> Entered details are: </h2>
  <table cellpadding=20px> 
	<tr><td>Entered name is:</td><td> <?php echo $_POST["name"]; ?></td></tr>
	<tr><td>Email-ID: </td><td><?php echo $_POST["email"]; ?></td></tr>
	<tr><td>Gender: </td><td><?php echo $_POST["gender"]; ?></td></tr>
	<tr><td>Age: </td><td> <?php echo $_POST["age"]; ?></td></tr>
	<tr><td>Blog Name: </td><td><?php echo $_POST["blogname"]; ?></td></tr>
	<tr><td>Blog Type: </td><td><?php echo $_POST["blogtype"]; ?></td></tr>
	<tr><td>Blog Description: </td><td><?php echo $_POST["description"]; ?></td></tr>
  </table>
  <br><hr>
 <a href="Proj1.php" class="button"><span> Proceed </span></a>
  </center>
 </body>
</html>
