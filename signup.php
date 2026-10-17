<?php
$pageTitle = "Sign Up | Vision 2030";
require "config/db.php";
include "includes/header.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Create CAPTCHA in session (new one on first load)
if (!isset($_SESSION["captcha"])) {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $cap = "";
    for ($i = 0; $i < 6; $i++) {
        $cap .= $chars[random_int(0, strlen($chars) - 1)];
    }
    $_SESSION["captcha"] = $cap;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name        = trim($_POST["name"] ?? "");
    $sid         = trim($_POST["sid"] ?? "");
    $dob         = trim($_POST["dob"] ?? "");
    $nationality = trim($_POST["nationality"] ?? "");
    $mobile      = trim($_POST["mobile"] ?? "");
    $email       = trim($_POST["email"] ?? "");
    $semester    = trim($_POST["semester"] ?? "");
    $password    = $_POST["password"] ?? "";
    $repass      = $_POST["repass"] ?? "";
    $captchaIn   = strtoupper(trim($_POST["captchaInput"] ?? ""));

    // Required fields check
    if ($name === "" || $sid === "" || $dob === "" || $nationality === "" || $mobile === "" || $email === "" || $semester === "" || $password === "" || $repass === "" || $captchaIn === "") {
        echo "<script>alert('Please fill all required fields.');</script>";
    } else {

        // Password match
        if ($password !== $repass) {
            echo "<script>alert('Passwords do not match.');</script>";
        } 
        // Password rules
        elseif (strlen($password) < 6) {
            echo "<script>alert('Password must be at least 6 characters.');</script>";
        }
        elseif (!preg_match('/\d/', $password)) {
            echo "<script>alert('Password must contain at least 1 number.');</script>";
        }
        elseif (!preg_match('/[A-Z]/', $password)) {
            echo "<script>alert('Password must contain at least 1 uppercase letter.');</script>";
        }
        // Mobile pattern +9665XXXXXXXX
        elseif (!preg_match('/^\+9665\d{8}$/', $mobile)) {
            echo "<script>alert('Mobile number must follow +9665XXXXXXXX format.');</script>";
        }
        // Semester 1-8
        elseif (!is_numeric($semester) || (int)$semester < 1 || (int)$semester > 8) {
            echo "<script>alert('Semester must be between 1 and 8.');</script>";
        }
        // Age 18+ exact
        else {
            $dobDate = date_create($dob);
            $today = new DateTime();
            if (!$dobDate) {
                echo "<script>alert('Invalid date of birth.');</script>";
            } else {
                $age = $today->diff($dobDate)->y;
                if ($age < 18) {
                    echo "<script>alert('You must be at least 18 years old.');</script>";
                }
                // CAPTCHA compare
                elseif ($captchaIn !== ($_SESSION["captcha"] ?? "")) {
                    echo "<script>alert('Incorrect CAPTCHA.');</script>";
                    // regenerate captcha after wrong try
                    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    $cap = "";
                    for ($i = 0; $i < 6; $i++) {
                        $cap .= $chars[random_int(0, strlen($chars) - 1)];
                    }
                    $_SESSION["captcha"] = $cap;
                } else {

                    // Check if email exists
                    $check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
                    $check->execute([$email]);

                    if ($check->rowCount() > 0) {
                        echo "<script>alert('Email already registered. Please login.');</script>";
                    } else {
                        $hash = password_hash($password, PASSWORD_DEFAULT);

                        $stmt = $pdo->prepare(
                            "INSERT INTO users (full_name, email, password_hash, nationality, mobile)
                             VALUES (?, ?, ?, ?, ?)"
                        );
                        $stmt->execute([$name, $email, $hash, $nationality, $mobile]);

                        // Refresh captcha after success
                        unset($_SESSION["captcha"]);

                        echo "<script>alert('Registration successful. Please login.'); window.location='login.php';</script>";
                    }
                }
            }
        }
    }
}
?>

<section class="content-section narrow">
  <h3>Create an Account</h3>

  <form class="form" id="signupForm" method="post">

    <label for="name">Name</label>
    <input id="name" name="name" type="text" required />

    <label for="sid">ID</label>
    <input id="sid" name="sid" type="text" required pattern="\d{6,12}" />

    <label for="dob">Date of Birth</label>
    <input id="dob" name="dob" type="date" required />

    <label for="nationality">Nationality</label>
    <select id="nationality" name="nationality" required>
      <option value="">Select Nationality</option>
      <option>Saudi</option>
      <option>Egyptian</option>
      <option>Indian</option>
      <option>Sudanese</option>
      <option>Pakistani</option>
      <option>Yemeni</option>
    </select>

    <label for="mobile">Mobile Number</label>
    <input id="mobile" name="mobile" type="tel" required placeholder="+9665xxxxxxxx"
           pattern="^\+9665\d{8}$" />

    <label for="email">Email</label>
    <input id="email" name="email" type="email" required />

    <label for="semester">Semester</label>
    <input id="semester" name="semester" type="number" required min="1" max="8" />

    <label for="password">Password</label>
    <input id="password" name="password" type="password" required minlength="6" />

    <label for="repass">Re-enter Password</label>
    <input id="repass" name="repass" type="password" required />

    <label>CAPTCHA</label>
    <div id="captchaBox"
         style="font-size:20px; font-weight:bold; background:#eee; width:140px; padding:8px; margin-bottom:5px;">
      <?= htmlspecialchars($_SESSION["captcha"] ?? "") ?>
    </div>

    <input id="captchaInput" name="captchaInput" type="text" placeholder="Enter CAPTCHA" required />

    <button type="submit" class="btn">Sign Up</button>
  </form>
</section>

<script>
document.getElementById("signupForm").addEventListener("submit", function(e) {
  let pwd = document.getElementById("password").value;
  let repwd = document.getElementById("repass").value;

  if (pwd !== repwd) {
    e.preventDefault();
    alert("Passwords do not match.");
  }
});
</script>

<?php include "includes/footer.php"; ?>
