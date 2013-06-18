<?php include('header.php'); ?>
  
  <div class="row">
    <div class="small-12 large-6 push-3 columns">
      <form>
        <fieldset>
          <legend>Forgot Your Password?</legend>
            <p>We'll send you instructions in an email to reset your password.</p>

            <div class="row">
              <div class="small-3 columns">
                <label for="Email" class="right inline">Email</label>
              </div>
              <div class="small-9 columns">
                <input type="text" id="email" placeholder="email">
              </div>
            </div>
          </fieldset>

        <input type="submit" value="Reset Password" class="button">
      </form>

      <p> <a href="main.php">Login</a> <br />
        <a href="sign-up.php">Create Account</a> </p>
    </div>
  </div>

<?php include('footer.php'); ?>