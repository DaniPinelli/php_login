
<?php
require("partials/header.php");

$message = "";

 if(!empty($_POST['email']) && !empty(_POST['password'])) {

    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if($stmt->execute()) {
        $message = "User created successfully";
    } else {
        $message = "Something went wrong. Please try again later.";
    }

 }
?>

<?php

 if(!empty($message)) {
    echo $message;
 }

?>

 <h1>Sign Up</h1>

 or <a href="signup.php">Login</a>   




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