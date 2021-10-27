
<?php

session_start();

if(isset($_SESSION['user_id'])) {
    header('Location: /php-login');
}

require("partials/header.php");

if (!empty($_POST['email']) && !empty($_POST['password'])){
    $records = $conn->prepare('SELECT * FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header("Location: /php-login");
    } else {
        $message = 'Sorry, those credentials do not match';
    }

    
}


?>

<h1>Login</h1>

<span>or <a href="signup.php">SignUp</a></span>

<?php if(!empty($message)): ?>
    <p><?= $message; ?></p>
<?php endif; ?>

<form action="login.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="email" placeholder="Email" type="email"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Login" class="btn btn-default">
        </div>
    </fieldset>

  </form>  

<?php
require("partials/footer.php");
?>