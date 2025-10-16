<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      flex-direction: column; 
    }
    .login-success {
      text-align: center;
      background-color: #4CAF50;
      color: #fff;
      border-radius: 5px;
      padding: 20px;
      max-width: 300px;
      margin-bottom: 20px; 
    }
    .logout-button a {
      text-decoration: none;
      display: inline-block;
      background-color: #f44336;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .logout-button a:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="login-success">
    <h2>Login Successful</h2>
    <p>Welcome to your account!</p>
  </div>
  <div class="logout-button">
    <a href="login.php">Logout</a>
  </div>
</body>
</html>



