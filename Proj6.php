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
	
	th
	{
	 border: 2px solid yellow;
	}

	tr
	{
	 border: 2px solid yellow;
	}

/*	table
	{
	 border: 2px solid magenta;
	} */

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


  </style>
 </head>
 <body>
  <header> 
	<img src="blog.jpeg" height="50" width="150"></td>
  </header>
  <h1 align="center"> Profiles </h1>
  <?php
 	$username = "root";
 	$passwd = "siddhesh";
 	$dbname = "Blogs";
 	$host = "localhost";	
	$dbconn = mysqli_connect($host, $username, $passwd, $dbname) ;

 	$sql1= "select * from User";
 	$res1 = mysqli_query($dbconn,$sql1);
	
	echo "<table cellpadding='10px'>
   	<tr>
		<th> Name </th> 
		<th> Email </th> 
		<th> Gender </th>
		<th> Age </th> 
		<th> Blog Name </th> 
		<th> Type </th>
		<th> Description </th>  
	</tr>";
	while ($row= mysqli_fetch_array($res1))
	{
	 echo "<tr>";
	 echo "<td>" . $row['Name'] . "</td>";
	 echo "<td>" . $row['Email'] . "</td>";
	 echo "<td>" . $row['Gender'] . "</td>";
	 echo "<td>" . $row['Age'] . "</td>";
	 echo "<td>" . $row['Blog Name'] . "</td>";
	 echo "<td>" . $row['Type'] . "</td>";
	 echo "<td>" . $row['Description'] . "</td>";
	 echo "</tr>";
	}
 
  echo "</table>"; ?> 
  <br><br>
  <center><footer> <a href="Proj1.php" class="button"> Exit </a></footer></center>  
 </body>
</html>
