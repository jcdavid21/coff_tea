<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="./styles/home.css">
  <link rel="stylesheet" href="./styles/general.css">
</head>
<body>
  <div class="center">
    <div class="wrapper">
        <form action="#">
            <div class="img-con">
                <img src="../assets/logo.png" alt="">
              </div>
            <div class="input-field">
            <input type="text" required>
            <label>Enter your email</label>
          </div>
          <div class="input-field">
            <input type="password" required>
            <label>Enter your password</label>
          </div>
          <div class="forget">
            <label for="remember">
              <input type="checkbox" id="remember">
              <p>Remember me</p>
            </label>
          </div>
          <button type="submit">Log In</button>
          <div class="register">
            <p>Don't have an account? <a href="./components/signup.php">Register</a></p>
          </div>
        </form>
      </div>
  </div>
</body>
</html>