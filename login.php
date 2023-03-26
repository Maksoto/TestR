<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Check login credentials
  if ($_POST['username'] == 'admin' && $_POST['password'] == 'password') {
    // Set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = 'admin';
    // Redirect to admin page
    header('Location: admin.php');
    exit;
  } else {
    // Show error message
    $error = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post">
    <label>Username:</label>
    <input type="text" name="username"><br>
    <label>Password:</label>
    <input type="password" name="password"><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
