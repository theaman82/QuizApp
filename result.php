<?php
    include_once "config/connect.php";
if (isset($_SESSION['user'])):
    $email = $_SESSION['user'];

    // Correct SQL query
    $query = $connect->query("SELECT * FROM users WHERE email='$email'");

    if ($query && $query->num_rows > 0) {
        $userData = $query->fetch_assoc();
        $username = $userData['name']; // Assuming 'name' column stores username
        
    } 
    $query = $connect->query("select * from rank where user_name='$username'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<body>
    <div class="bg-gray-400">
        <h1><?= $query['score'];?></h1>
    </div>
    
</body>
</html>