<?php
$pageTitle = "Home | Visit Saudi";
include "includes/header.php";
?>

<main class="page">

<section class="hero">
  <div class="hero-content">
    <h2>Welcome to Visit Saudi</h2>
    <p>Discover the Kingdom’s diverse destinations, unique culture, and world-class hospitality.</p>
    <a class="btn" href="#vision2030">Explore Vision 2030</a>
  </div>
</section>

<section id="vision2030" class="content-section">
  <h3>Tourism in Saudi Vision 2030</h3>
  <p>
    Tourism is a key pillar in Saudi Arabia’s Vision 2030, driving economic growth, creating jobs,
    and showcasing the Kingdom’s natural and cultural treasures.
  </p>
  <ul>
    <li>New giga-projects enabling sustainable, luxury tourism.</li>
    <li>Support for SMEs in hospitality and travel.</li>
    <li>Investment in transport and smart city infrastructure.</li>
  </ul>
  <a class="btn-outline" href="https://www.vision2030.gov.sa/en" target="_blank">Open Vision 2030</a>
</section>

<section id="map" class="content-section">
  <h3>Saudi Map</h3>
  <p>Navigate the Kingdom’s regions and discover must-see destinations.</p>
  <a href="https://www.google.com/maps/place/Saudi+Arabia" target="_blank">
    <img src="assets/sa-06.jpg" alt="Saudi Map" class="wide">
  </a>
</section>

<section id="highlights" class="content-section">
  <h3>Highlights</h3>
  <div class="cards">

    <article class="card">
      <img src="assets/riyadh.jpg" alt="Riyadh">
      <h4>Riyadh</h4>
      <p>The capital city—modern skyline and heritage sites.</p>
      <a href="destinations.php#riyadh" class="btn-small">View</a>
    </article>

    <article class="card">
      <img src="assets/jeddah.jpg" alt="Jeddah">
      <h4>Jeddah</h4>
      <p>Gateway to the Red Sea and historic Al-Balad.</p>
      <a href="destinations.php#jeddah" class="btn-small">View</a>
    </article>

    <article class="card">
      <img src="assets/alula.jpg" alt="AlUla">
      <h4>AlUla</h4>
      <p>Ancient wonders and desert landscapes.</p>
      <a href="destinations.php#alula" class="btn-small">View</a>
    </article>

  </div>
</section>

</main>

<script>
// Welcome user + show Get Visa menu
let user = localStorage.getItem("vs_user");
if (user) {
  document.getElementById("welcomeUser").textContent = "Welcome, " + user;
  document.getElementById("getVisaMenu").classList.remove("hidden");
}
</script>

<?php include "includes/footer.php"; ?>
