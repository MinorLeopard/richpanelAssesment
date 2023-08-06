<?php

require_once 'functionsrio.php';

if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['confirm_password']))
{
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $result=datarequestfrom_("INSERT INTO loginDetails VALUES('$username','$pass')");
    if(!$result) return "Error";
    
echo<<<_END
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 20px;
      width: 300px;
    }

    .login-container h2 {
      text-align: center;
    }

    .login-form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form class="login-form" action="home.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>



_END;
    
}


?>