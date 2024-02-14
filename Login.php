<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>


   <div class="container">
    <h1>Login</h1>
    <div class = "textfields">   
     
       <form action="Login.php" method="post">
        <input class = "form-control" type="text" id="Username" name="Username" placeholder="Username"><br>
        <input class=" Forms" type="password" id="password" name = "password" placeholder="Password"><br>
      
        <button class="Button_login" type="submit" name ="Login_user">Login</button>
      </form>
      </div>
     <label class="dont">Don't have an account?<a href="Register.php"> Register Now</a></label>
   </div>

   <script>

   </script>
   
</body>
</html>

<?php
 
  session_start();

     include("Database.php");
    


  //LOGIN
   if(isset($_POST['Username']) && isset($_POST['password'])){
        $username = $_POST['Username'];
        $password = $_POST['password'];
 
        
        $username = stripcslashes($username);
        $password = stripcslashes($password);

        $username = mysqli_real_escape_string($con,$username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "SELECT * FROM register WHERE Username = '$username' and password = '$password'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
         
            header('Location: Main.php');

        }else{
           echo"FAILED TO LOGIN";

        }

    }
?>