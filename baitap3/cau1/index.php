<?php
$message = '';
$color = '';  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

  
    if ($username === 'admin' && $password === 'admin') {
       
        $message = "Xin chào, $username!";
        $color = "green";
    } else {
      
        $message = "Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại.";
        $color = "red";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 400px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.header {
    background-color: lightgreen;
    padding: 20px;
    text-align: center;
}

h2 {
    margin: 0;
    color: black;
}

form {
    padding: 20px; 
    display: flex;
    flex-direction: column;
}

input {
    padding: 15px;
    margin: 10px 0;
    border: none;
    background-color: #ddd;
    border-radius: 5px;
}

input:focus {
    outline: none;
    background-color: #ccc;
}

button {
    padding: 15px;
    background-color: lightgreen;
    color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: green;
    color: white;
}

#message {
    margin-top: 10px;
    text-align: center;
    font-weight: bold;
    color: <?php echo $color; ?>;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Sign in</h2>
        </div>
        <form action="" method="POST" id="loginForm">
            <input type="text" id="username" name="username" placeholder="Username" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
        <div id="message">
            <?php 
               
                echo $message; 
            ?>
        </div>
    </div>
</body>
</html>
