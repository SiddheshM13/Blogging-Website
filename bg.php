<?php
$servername = "localhost";//mysql server
$uname = "root";
$pword = "";
$dbname = "sdp";
$flag=0;
//connect to mysql server and database
$conn = new mysqli($servername, $uname, $pword, $dbname);
if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}
else{
		$sql="SELECT * FROM login";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			if($row["username"]==$_POST["uname"]){
				$flag=1;
				break;			
			}
		}
		if($flag==1){
				$flag=0;
				if($row["password"]==$_POST["pwd"]){
					$flag=1;	
				}	
				if($flag==1){
					echo ("Hello ".$row["fname"]." ".$row["lname"]. " A.K.A ". $row["username"]."<br>");
					echo ("Your rating is ".$row["user_rating"]."<br>");
					echo ("Your gender is ".$row["gender"]."<br>");
					echo ("You live in ".$row["country"]."<br>");
					echo ("Your Email id is ".$row["emailid"]."<br>");
				}
				else{
					echo ("Access Denied");
				}
			}
			else{
				echo("No user");
			}
	}
		else{
			echo "No Data";
			
		}
}
?>