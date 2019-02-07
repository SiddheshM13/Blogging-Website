<html>
 <head>
 	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
	body 
	{
	 background-image: url("image.jpg");
	 background-repeat: no-repeat;
	 background-size: cover;
	 overflow: hidden;
	} 

	h1
	{
	 color: black;
	 font-family: georgia;
	 font-size: 300%;
	 font-style: italic;
	 background: url('blogger.jpg')
	}

	h2
	{
	 color: #FF9900;
	 font-family: georgia;
	 font-size: 300%;
	 font-style: oblique;
	}
	
	a.button 
	{
 	 display: inline-block;
 	 border-radius: 4px;
 	 background-color: #f4511e;
 	 border: none;
 	 color: #FFFFFF;
 	 text-align: center;
 	 font-size: 18px;
 	 padding: 15px;
 	 width: 150px;
 	 height: 50px;
 	 transition: all 0.5s;
 	 cursor: pointer;
 	 margin: 2px;
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
  	 right: -20px;
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

	p
	{
	 font-style: arial;
	 font-size: 200%;
	 color: red;
	}

	hr
	{
		color: currentColor;
		width: 1px;
		display: block;
	}
	h3
	{
		color:white;
		font-family: georgia;
	}
	footer
	{
		background: url(blogger.jpg);
		color: black;
		text-align: center;
		height: 30px;
		text
	}


  </style>
 </head>
	 
 <body>
  <header> <img src="blog.jpeg" height="50" width="150"></header><br>
  <h1 align="center"><b>WELCOME TO BLOGGER</b></h1><hr><hr>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-6'><center><h3>Create Profile and write</h3>
			<a href="Proj2.php" class="button"><span> Register </span></a></center></div>

			<div class='col-sm-6'><center><h3>Login for Registered user</h3>
			<a href="Proj7.php" class="button"><span> Login </span></a></center></div>
		</div>	
	</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer>
		<b><b>&copy; All Copyrights Reserved</b></b>
	</footer>
 </body>
</html>
