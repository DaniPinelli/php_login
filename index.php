<?php
require("partials/header.php");

session_start();

if(isset1($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    records->execute();

    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = NULL;

    if(count($results) > 0){
        $user = $results;
    }

    header("Location: index.php");
}
?>


<?php if(!empy(user)): ?>
<br>Welcome. <?= $user['email']; ?>
<br>You are logged in
<a href="logout.php">Logout</a>
<?php else: ?>

<h1>Login or Sign Up</h1>

 <a href="login.php">Login</a> or <a href="signup.php">Sign Up</a>    


<?php
require("partials/footer.php");
?>