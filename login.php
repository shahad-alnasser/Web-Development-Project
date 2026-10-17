<?php
$pageTitle = "Sign In | Vision 2030";
require "config/db.php";
include "includes/header.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password_hash"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user"] = $user["full_name"];

        echo "<script>alert('Welcome {$user['full_name']}'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>

<section class="content-section narrow">
<h3>Sign In</h3>

<form method="post" class="form">

  <label>Email</label>
  <input type="email" name="email" required>

  <label>Password</label>
  <input type="password" name="password" required minlength="6">

  <button type="submit" class="btn">Sign In</button>
</form>
</section>

<?php include "includes/footer.php"; ?>
