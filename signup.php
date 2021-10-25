
<?php
require("partials/header.php");
?>



 <h1>Sign Up</h1>

 or <a href="login.php">Login</a>   




<form action="login.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="email" placeholder="Email" type="email"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Log In</button>
        </div>
    </fieldset>

  </form>  




<?php
require("partials/footer.php");
?>