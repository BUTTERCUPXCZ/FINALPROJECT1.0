<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Register.css">
    

</head>
<body>


        <div class="container">
           
           <h1>Create account</h1>
            <form action="Register.php" method="post">
                <div class="Names">
                <input type="text" name="Username" placeholder="Username">
                <input type="text" name="Firstname" placeholder="First Name">
                <input type="text" name="Middlename" placeholder="Middle Name ">
                <input type="text" name="Lastname"  placeholder="Last Name"><br>
            </div>
             <div class="Email">
                <input class="Emails" type="email" name="email" placeholder="Email"> <br>
                 <input class="Passwords" type="password" id="password" name="Password" placeholder="Password"><br>
                
                 <button type="submit" value="Submit" class="btncreate">Create account</button><br>
                 <label>Already have and account? <a href="Login.html">Sign in</a></label>
            </div>



            </form>
        </div>
    
</body>
</html>
<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  $Username = isset($_POST['Username']) ? $_POST['Username']: '';
  $firstname = isset($_POST['Firstname']) ? $_POST['Firstname'] : '';
  $middlename = isset($_POST['Middlename']) ? $_POST['Middlename'] : '';
  $Lastname = isset($_POST['Lastname']) ? $_POST['Lastname'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $password = isset($_POST['Password']) ? $_POST['Password'] : '';
   $errors = array();
          
           $conn = new mysqli('localhost', 'root', '', 'user');
           if($conn->connect_error){
            die('Connection Failed : ' .$conn->connect_error);
          }else{
            $stmt = $conn->prepare("INSERT INTO register(Username,firstname, middlename, lastname, email, password) values (?,?,?,?,?,?)");
            $stmt->bind_param("ssssss",$Username,$firstname, $middlename, $Lastname, $email, $password);
            $stmt->execute();
            echo "Registration Successfully!!";
            $stmt->close();
            $conn->close();
          }
        }
    
?>