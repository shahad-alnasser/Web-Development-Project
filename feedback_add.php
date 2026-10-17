<?php
$pageTitle = "Add Feedback | Visit Saudi";
require "config/db.php";
include "includes/header.php";


// User must be logged in
if (!isset($_SESSION["user_id"])) {
    echo "<script>alert('Please login first to give feedback.'); window.location='login.php';</script>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_id = $_SESSION["user_id"];
    $rating  = $_POST["rating"] ?? "";
    $message = trim($_POST["message"] ?? "");

    if ($rating === "" || $message === "") {
        echo "<script>alert('Please fill all fields.');</script>";
    } elseif ($rating < 1 || $rating > 5) {
        echo "<script>alert('Rating must be between 1 and 5.');</script>";
    } else {

        $stmt = $pdo->prepare(
            "INSERT INTO feedback (user_id, rating, message)
             VALUES (?, ?, ?)"
        );
        $stmt->execute([$user_id, $rating, $message]);

        echo "<script>alert('Thank you for your feedback!');</script>";
    }
}
?>

<main class="page">
<section class="content-section narrow">
  <h3>Send Us Your Feedback</h3>

  <form class="form" method="post">

    <label for="rating">Rating (1–5)</label>
    <select id="rating" name="rating" required>
      <option value="">Select Rating</option>
      <option value="1">1 – Very Bad</option>
      <option value="2">2 – Bad</option>
      <option value="3">3 – Good</option>
      <option value="4">4 – Very Good</option>
      <option value="5">5 – Excellent</option>
    </select>

    <label for="message">Feedback</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit" class="btn">Submit Feedback</button>
  </form>

</section>
</main>

<?php include "includes/footer.php"; ?>
