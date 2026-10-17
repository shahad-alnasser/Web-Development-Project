<?php
$pageTitle = "Gallery | Visit Saudi";
include "includes/header.php";
?>

<main class="page">

<section class="content-section">
  <h3>Photo Gallery</h3>

  <div class="gallery-grid">
    <img src="assets/riyadh.jpg" alt="Riyadh">
    <img src="assets/jeddah.jpg" alt="Jeddah">
    <img src="assets/alula.jpg" alt="AlUla">
    <img src="assets/abha.jpg" alt="Abha">
    <img src="assets/al khobar.jpg" alt="Al Khobar">
    <img src="assets/madinah.jpg" alt="Madinah">
  </div>
</section>

<section class="content-section">
  <h3>Videos</h3>
  <p>Sample external video embed:</p>

  <div class="video-wrap">
    <iframe width="560" height="315"
      src="https://www.youtube.com/embed/QcR3yeyBJ40"
      title="Tourism in Saudi Arabia"
      frameborder="0"
      allowfullscreen>
    </iframe>
  </div>
</section>

</main>

<?php include "includes/footer.php"; ?>
