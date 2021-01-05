<!--i have pasted php ka tumhara code,you change ismehi-->
<?php
// Start Session
session_start();
// Get data from the users
if(isset($_POST["login"]) && isset($_POST["username"]) && isset($_POST["password"]) )
{
  
  $user = $_POST["username"];
  $password1 = $_POST["password"];
//$usertype=$_POST["usertype"];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "forum";
  $message=" ";
// Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM login WHERE username='$user' AND password='$password1';"; //AND usertype='$usertype'

  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_array($result);
  print_r($row);
  //row [username,password ,usertype]
  if (is_array($row)) 
  {
    $_SESSION["username"] = $row['username'];
    echo $_SESSION["username"];

    if ((isset($_SESSION["username"])))
    {
      echo "Success";
      header("Location: index.php");
    }

  } 
  else {
   $message = "Invalid Username or Password!";
   echo "<script type='text/javascript'>alert('$message');</script>";
  }
}
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login page</title>
 <style>
  * {
  margin: 0px;
  padding: 0px;
}
.mainone{
    /*position: center; */
    height: 100%;
    width: 100%;
    margin-top: 30px;
    font-size: 120%;
    }

.mainone::before{
  content: "";
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("image1.jpg");
  background-size: cover;
  position: absolute;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  /*opacity: 0.5;*/


}
  .newanchor:link {
  color:white;
  text-decoration:none;
  }

  .newanchor:hover{
  color:red;
  }

p{
  font-size: 20px;
  font-family:Roboto;
  font-weight: bold;
  color:white;
}
.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  /*margin: 0px auto;*/
  padding: 65px;
  border: 2px;
  background: rgba(0,0,0,0.65);
  border-radius: 10px;
  position: relative;
}
.input-group {
  margin: 10px 0px 10px 0px;
  position: relative;
  /*top:50%;
    left:50%;*/
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
  font-weight: bold;
  color: white;
  font-family: Roboto;
  position: relative;
}
.input-group input {
  height: 30px;
  width: 80%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  position: relative;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: black;
  background:white;
  border: none;
  border-radius: 5px;
  margin-top: 20px;
  width: 100px;
  height: 50px;
  font-size: 20px;
 }
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #faf8f8; 
  color: #f3ebeb; 
  background: #0c0c0c; 
  border-radius: 5px; 
  text-align: left;
}
select{
  width: 50%;
  height: 40px;
  border-radius: 10px;
  font-size: 20px;
  }
.col-md-8{
    /*background: #ff9b00;*/
    padding-right: 3%;
    padding-left: 3%;
    margin-left: 400px;
    margin-right: 400px;
    border-radius: 10px;
    position: relative;
  }
  .h2ka{
    font-family:Oswald;
    /*position:absolute;*/
    font-weight: bold;
    font-size: 65px;
    font-stretch:expanded;
    /*line-height: 1.6;*/
    color:#ffffff;
  }
 h1{
    color:#0f0303; 
    font-family:Oswald; 
    font-size:76px;
    background-color: rgb(247, 242, 242,0.5);
    margin-bottom: 50px;
    border-radius: 10px;
 }

  </style>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="styles.css">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
 
 <center>
  <div class="mainone">
    <hr class="mb-4">
  <div class="col-md-8">
         <!--h2 class="h2ka" >Cinema Lover? Go</h2-->
         <!--<h2 style="color:#ecede4;font-family:Oswald;font-size:62px;">Start</h2>-->
         <h1>Login</h1>
  </div>

  <div class="col-md-9">
 <form method="post" action="">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
<!--  <div class="input-group">
      <label>Select usertype</label>
      <select name='usertype'>
			<option value='admin'>Admin</option>
			<option value='user'>User</option>
		</select>
    </div>-->
    <div class="input-group">
      <center><button type="submit" class="btn" name="login">LOGIN</button></center>
    </div>
   <p>
      Create new account for <a href="register1.html" class="newanchor">Student</a><br>
      Create new account for <a href="register2.html" class="newanchor">Staff</a>
    </p>
  </form>
</div>
</div>
</center>

</body>
</html>

