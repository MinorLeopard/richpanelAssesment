<?php

require_once 'functionsrio.php';

if(isset($_POST['username'])&&isset($_POST['password']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result=datarequestfrom_("SELECT * FROM loginDetails WHERE username='$username' AND pass='$password'");
    if($result->num_rows!=0)
    {
echo<<<_END
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription Page</title>
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

    .subscription-container {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 20px;
      width: 300px;
    }

    .subscription-container h2 {
      text-align: center;
    }

    .subscription-form {
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

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .form-group .price {
      margin-top: 5px;
      font-weight: bold;
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

    .logout-btn {
      margin-top: 10px;
      background-color: #dc3545;
    }
  </style>
</head>
<body>
  <div class="subscription-container">
    <h2>Subscription Plan</h2>
    <form class="subscription-form" action="checkout.html" method="post">
      <div class="form-group">
        <label for="plan">Select Plan:</label>
        <select id="plan" name="plan" onchange="updatePrice()">
          <option value="monthly">Monthly ($200/month)</option>
          <option value="yearly">Yearly ($1000/year)</option>
        </select>
        <div class="price" id="price">$200/month</div>
      </div>
      <div class="form-group">
        <button type="submit">Subscribe Now</button>
      </div>
    </form>
    <div class="logout-btn">
      <button onclick="logout()">Logout</button>
    </div>
  </div>

  <script>
    // Function to update the price based on the selected plan
    function updatePrice() {
      const planSelect = document.getElementById('plan');
      const priceDiv = document.getElementById('price');

      if (planSelect.value === 'monthly') {
        priceDiv.textContent = '$200/month';
      } else if (planSelect.value === 'yearly') {
        priceDiv.textContent = '$1000/year';
      }
    }

    // Function to handle logout
    function logout() {
      // Implement your logout logic here (e.g., clearing user session)
      // For this example, let's simply redirect to a logout page
      window.location.href = 'login.html';
    }
  </script>
</body>
</html>


_END;
        
    }
    
}




?>