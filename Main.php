<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

<form action="" method="post">
    
    <input type="text" name="first_name" required><br><br>
     <input type="text" name="last_name" required><br><br>
 <input type="email" name="email" required><br><br>
 <input type="password" name="password" required><br><br>
     <input type="password" name="confirm_password" required><br><br>
     <input type="text" name="website_url"><br><br>
    
    <input type="checkbox" id="terms" value="accepted" required>
    I accept the Terms & Conditions
    <label for="terms"></label><br><br>
    
    <button class="submit-button" id="submit-button" type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect values from input fields
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    
}
?>

</body>
</html>