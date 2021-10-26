
<?php
require("partials/header.php");

if (!empty($_POST['email'] && !empty($_POST['password']) )){
    $records = $conn->prepare('SELECT * FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $db->getUserByEmail($email);
    if ($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
    } else {
        $error = "Invalid email or password";
    }
}
}

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
            <input type="submit" value="Login" class="btn btn-default">
        </div>
    </fieldset>

  </form>  

<?php
require("partials/footer.php");
?>