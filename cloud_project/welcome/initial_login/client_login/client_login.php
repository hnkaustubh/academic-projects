<html>
  <head>
    <title>Javascript Login Form Validation</title>

	<!-- include css file here-->
    <link rel="stylesheet" href="css/style.css"/>
	
	<!-- include javascript file here-->
    <script src="js/login.js"></script> 
      
  </head>
  <body>
	<div class="container">
	  <div class="main">
		<h2>Enter the details</h2><hr/>
 
		<form id="form_id" method="post" name="myform">
		  <label>User Name :</label></br>
		  <input type="text" name="username" id="username"/></br>
 
		  <label>Password :</label></br>
		  <input type="password" name="password" id="password"/></br>
 
		  <input type="button" value="Login" onclick="location.href='../../../client_dash/dashboard1.php'"/></br></br>
          <input type="button" value="Back" onclick="location.href='../start_page_1.php'"/>
          <!--input type="button" value="Back" a href=""/-->
		</form>
		
	  </div>
	  
	</div>
 </body>
</html>
