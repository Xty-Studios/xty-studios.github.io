// signup.php
<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Generate salt and hash the password
  $salt = generate_salt(); // Function to generate a random salt
  $hashed_password = hash('sha256', $password . $salt);

  // Store username, hashed password, and salt in the database
  // Add code to store user details in the database
?>
