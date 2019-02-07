<html>
 <head>
  <style>
	body
	{
	 background-image: url("download.jpg");
	 font-family: arial;
	 color: red;
	 background-repeat: no-repeat;
	 background-size: cover;
	 font-size: 20px;	 
	}
	
	table
	{
	 border: 2px solid yellow;
	}

	.button 
	{
    	 background-color: red; 
         border: none;
    	 color: white;
    	 padding: 16px 32px;
    	 text-align: center;
    	 text-decoration: none;
    	 display: inline-block;
    	 font-size: 16px;
    	 margin: 4px 2px;
   	 -webkit-transition-duration: 0.4s; 
   	 transition-duration: 0.4s;
   	 cursor: pointer;
	}

	.button 
	{
    	 background-color: white; 
    	 color: black; 
    	 border: 2px solid red;
	}

	.button:hover 
	{
	 background-color: red;
	 color: white;
	}
  </style>
 </head>
 <body>
  <header> 
	<img src="blog.jpeg" height="50" width="150"></td>
  </header>
  <center>
  <h1> NEW BLOG </h1>
  <form method="POST">
  <table cellpadding="20px">
  <tr>
	<td>Enter your registered Email-ID:
  	<input type="text" name="email1" size="50%"></td>
  </tr>
  <tr>
	<td>Blog title: 
  	<input type="text" name="blogtitle" size="69%"></td>
  </tr>
  <tr>
	<td> <h2>Type your Blog:</h2> 
	<textarea name="blog" rows="25" cols="77"></textarea></td>
  </tr>
  </table> 
  <input type="submit" name="submit" value="Submit" class="button">

  <?php if(isset($_POST['submit']))
  {
 	$username = "root";
	$passwd = "siddhesh";
	$dbname = "Blogs";
 	$host = "localhost";
 	$dbconn = mysqli_connect($host, $username, $passwd, $dbname) ;

	$email1 = $_POST['email1'];
	$blogtitle = $_POST['blogtitle'];
	$blog = $_POST['blog']; 

	$sqli = "insert into Table1 values('$email1', '$blogtitle', '$blog')";
	$res = mysqli_query($dbconn, $sqli); 
	if ($res)
		echo "<br><br> Submitted Successfully";
	else
		echo "<br><br> Submission Failed";
  }
  ?>  
  </form>
  <hr width=2px>
  <a href="Proj1.php" class="button"> Exit </a> 	
 </body>
</html>
