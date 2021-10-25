
<?php
include("partials/header.php");
?>

<h1>Login</h1>

<form action="login.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="email" placeholder="Email" type="email"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Log In</button>
        </div>
    </fieldset>

  </form>  

<?php
include("partials/footer.php");
?>