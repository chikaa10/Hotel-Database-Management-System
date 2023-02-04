<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Sorry!</title>
  <style>
  body
	 {
 background-image: url("back1.jpg");
 color: black;
 text-align:left;
 padding: 20px 20px;
 font-family: "Georgia",serif;
	 }
	 .button 
{
    background-color: black; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
  
  </style>
  </head>
  
  <body>
  
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <p><h2>Sorry, only <?php session_start(); echo $_SESSION["cntrooms"]; echo " "; echo $_SESSION["typeofroom"]; ?> rooms are available!</h2></p>
  <p><h3> The selected number of rooms are not available. Please check for a different date or type of room</h3></p>
  <a href="registeration.php"><input type="button" class="button" name="goback" value="Back!"></a>
  </body>
  
</html>
  
  