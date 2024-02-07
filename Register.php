
<?php
  
  $firstname = isset($_POST['Firstname']) ? $_POST['Firstname'] : '';
  $middlename = isset($_POST['Middlename']) ? $_POST['Middlename'] : '';
  $Lastname = isset($_POST['Lastname']) ? $_POST['Lastname'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $password = isset($_POST['Password']) ? $_POST['Password'] : '';
           
          $conn = new mysqli('localhost', 'root', '', 'user');
      
           if($conn->connect_error){
            die('Connection Failed : ' .$conn->connect_error);
       
           }else{
               $stmt = $conn->prepare("INSERT INTO register(firstname, middlename, lastname, email, password) values (?,?,?,?,?)");
            $stmt->bind_param("sssss",$firstname, $middlename, $Lastname, $email, $password);
            $stmt->execute();
            echo "registration Successfully!!";
            $stmt->close();
            $conn->close();
       }

   
    
?>