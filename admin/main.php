<?php include('header.php'); ?>
  
  <div class="row">
    <div class="small-12 large-6 push-3 columns">
      <form>
        <fieldset>
          <legend>Login</legend>

            <div class="row">
              <div class="small-3 columns">
                <label for="Email" class="right inline">Email</label>
              </div>
              <div class="small-9 columns">
                <input type="text" id="email" placeholder="email">
              </div>
            </div>

            <div class="row">
              <div class="small-3 columns">
                <label for="pw" class="right inline">Password</label>
              </div>
              <div class="small-9 columns">
                <input type="password" id="pw">
              </div>
            </div>
          </fieldset>

        <input type="submit" value="Login" class="button">
      </form>

      <p> <a href="forgot-password.php">Forgot Password</a> <br />
        <a href="sign-up.php">Create Account</a> </p>
    </div>
  </div>

<?php include('footer.php'); ?>