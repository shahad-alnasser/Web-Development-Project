<?php
$pageTitle = "User Feedback | Visit Saudi";
require "config/db.php";
include "includes/header.php";

$stmt = $pdo->query(
    "SELECT u.full_name, f.rating, f.message, f.created_at
     FROM feedback f
     JOIN users u ON f.user_id = u.id
     ORDER BY f.created_at DESC"
);
$feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="page">
<section class="content-section">
  <h3>User Feedback</h3>

  <?php if (count($feedbacks) === 0): ?>
    <p>No feedback available yet.</p>
  <?php else: ?>

    <div class="feedback-list">
      <?php foreach ($feedbacks as $f): ?>
        <div class="feedback-card">

          <h4><?= htmlspecialchars($f["full_name"]) ?></h4>

          <p>
            <strong>Rating:</strong>
            <?= str_repeat("★", (int)$f["rating"]) ?>
            <?= str_repeat("☆", 5 - (int)$f["rating"]) ?>
          </p>

          <p><?= nl2br(htmlspecialchars($f["message"])) ?></p>

          <small><?= $f["created_at"] ?></small>

        </div>
      <?php endforeach; ?>
    </div>

  <?php endif; ?>

</section>
</main>

<?php include "includes/footer.php"; ?>
