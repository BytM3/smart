<?php
    include_once 'head-foot/header.php'
?>

<h1>Sign up</h1>
      <form action="inc/signup.inc.php" method="post">
        <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>full name</label>
        </div>
        <div class="txt_field">
          <input type="text" name="uid" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>e-mail</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pwd" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="rpwd" required>
          <span></span>
          <label>re-enter password</label>
        </div>

        <input type="submit" class="lg" value="Login">

      </form>


<?php
    include_once 'head-foot/footer.php'
?>
