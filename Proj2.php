<html>
 <head>
  <style>
	body
	{
	 background-image: url("image.jpg");
	 font-family: arial;
	 color: yellow;
	 background-repeat: no-repeat;
	 background-size: cover;	 
	}
	
	.error 
	{color: #FF0000;}

	th
	{
	 border: 2px solid red;
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
  </style>
 </head>
 <body>
  <header> 
	<img src="blog.jpeg" height="50" width="150">
  </header>
  <br>
  <center>
  <h1> Fill in your details </h1>
  <?php
         $nameErr = $emailErr = $genderErr = $blogtypeErr =  "";
         $name = $email = $gender = $blogname = $blogtype = $description = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") 
	 {
            if (empty($_POST["name"])) 
	    {
               $nameErr = "Name is required";
            }
            else 
	    {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) 
	    {
               $emailErr = "Email is required";
            }
	    else 
	    {
               $email = test_input($_POST["email"]);
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	       {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["gender"])) 
	    {
               $genderErr = "Gender is required";
            }
	    else 
	    {
               $gender = test_input($_POST["gender"]);
            }

            if (empty($_POST["blogtype"])) 
	    {
               $blogtypeErr = "Blogtype is required";
            }
	    else 
	    {
               $blogtype = test_input($_POST["blogtype"]);
            }
                    
            if (empty($_POST["blogname"])) 
	    {
               $blogname = "";
            }
	    else 
	    {
                $blogname = test_input($_POST["blogname"]);
            }  

            if (empty($_POST["age"])) 
	    {
               $age = "";
            }
	    else 
	    {
                $age = test_input($_POST["age"]);
            }           
            
            if (empty($_POST["description"])) 
	    {
               $description = "";
            }
	    else 
	    {
               $description = test_input($_POST["description"]);
            }
         } 

         if(!isset($_POST["submit"]))
         {
            $checkErr = "You must agree to terms";
         }  
         
	 function test_input($data) 
	 {
            $data = trim($data);
            $data = htmlspecialchars($data);
            return $data;
         }
  ?>
  <table cellpadding="50px">
   <th>	
   <h2 align="center">Blogger's Site Registration</h2>
      
      <form method = "POST" action = "Proj3.php">
         <table cellpadding="10px">
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name"  size="50">
               <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email" size="50%">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type="radio" name="gender" value= "Female"> Female 
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                          
                  <input type = "radio" name = "gender" value = "Male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  Age: <input type= "text" name= "age" size="10%">
               </td>
            </tr>

            <tr>
               <td>Blog Name:</td>
               <td> <input type = "text" name = "blogname" size="22px"> &nbsp;
               Blog Type:
                  <select name = "blogtype">
		  <option></option>
		  <option value = "Food">Food </option>
		  <option value = "Fashion">Fashion </option>
		  <option value = "Travel">Travel </option>
		  <option value = "Education">Education </option>
		  <option value = "Music">Music </option>
		  <option value = "Others">Others </option>
		  </select>                  
                  <span class = "error">* <?php echo $blogtypeErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Description:</td>
               <td> <textarea name = "description" rows = "6" cols = "46"></textarea></td>
            </tr> 
	</form>
  </table>        
               <input type = "checkbox" name = "checked" value = "1"> I Agree.
               <span class = "error">* <?php echo $checkErr;?></span><br>
               <input type = "submit" class=button name = "submit" value = "Submit"> 
  </form>
  </center>
 </body>
</html>
