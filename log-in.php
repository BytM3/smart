<?php
    include_once 'head-foot/header.php'
?>

    <h1>Login</h1>
      <form action="inc/login.inc.php" method="post">
        <div class="txt_field">
          <input type="text" name="" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="sign-up.php">Signup</a>
        </div>
      </form>


<?php
    include_once 'head-foot/footer.php'
?>
