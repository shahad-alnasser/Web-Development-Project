<?php
$pageTitle = "Destinations | Visit Saudi";
include "includes/header.php";
?>

<main class="page">
<section class="content-section">
  <h3>Destinations & Hotels</h3>
  <p>Select a city to view highlights, pictures, and hotels.</p>

  <div class="city-grid">

    <!-- Riyadh -->
    <article id="riyadh" class="city">
      <img src="assets/riyadh.jpg" alt="Riyadh">
      <h4>Riyadh</h4>
      <p>Modern capital with cultural heritage, museums, and mega events.</p>

      <ul class="hotels">
        <li>
          <strong>Capital Grand Hotel</strong> — 5★ — Near Boulevard City
          <a class="btn-small"
             href="hotel_booking.php?hotel=Capital%20Grand%20Hotel&city=Riyadh">
            Book Hotel
          </a>
        </li>
        <li>
          <strong>Olaya Suites</strong> — 4★ — Business district
          <a class="btn-small"
             href="hotel_booking.php?hotel=Olaya%20Suites&city=Riyadh">
            Book Hotel
          </a>
        </li>
      </ul>
    </article>

    <!-- Jeddah -->
    <article id="jeddah" class="city">
      <img src="assets/jeddah.jpg" alt="Jeddah">
      <h4>Jeddah</h4>
      <p>Sea breeze, Corniche sunsets, and UNESCO heritage in Al-Balad.</p>

      <ul class="hotels">
        <li>
          <strong>Red Sea Resort</strong> — 5★ — Corniche front
          <a class="btn-small"
             href="hotel_booking.php?hotel=Red%20Sea%20Resort&city=Jeddah">
            Book Hotel
          </a>
        </li>
        <li>
          <strong>Al-Balad Heritage Inn</strong> — 4★ — Historic district
          <a class="btn-small"
             href="hotel_booking.php?hotel=Al-Balad%20Heritage%20Inn&city=Jeddah">
            Book Hotel
          </a>
        </li>
      </ul>
    </article>

    <!-- AlUla -->
    <article id="alula" class="city">
      <img src="assets/alula.jpg" alt="AlUla">
      <h4>AlUla</h4>
      <p>Rock formations, Nabatean tombs, and immersive desert experiences.</p>

      <ul class="hotels">
        <li>
          <strong>Desert Star Camp</strong> — 4★ — Hegra vicinity
          <a class="btn-small"
             href="hotel_booking.php?hotel=Desert%20Star%20Camp&city=AlUla">
            Book Hotel
          </a>
        </li>
        <li>
          <strong>Oasis Retreat</strong> — 3★ — Palm groves
          <a class="btn-small"
             href="hotel_booking.php?hotel=Oasis%20Retreat&city=AlUla">
            Book Hotel
          </a>
        </li>
      </ul>
    </article>

    <!-- Abha -->
    <article id="abha" class="city">
      <img src="assets/abha.jpg" alt="Abha">
      <h4>Abha</h4>
      <p>Mountain vistas, cool climate, cable cars, and Asir heritage.</p>

      <ul class="hotels">
        <li>
          <strong>Asir Heights</strong> — 4★ — Mountain view
          <a class="btn-small"
             href="hotel_booking.php?hotel=Asir%20Heights&city=Abha">
            Book Hotel
          </a>
        </li>
        <li>
          <strong>Fog Valley Hotel</strong> — 3★ — Near parks
          <a class="btn-small"
             href="hotel_booking.php?hotel=Fog%20Valley%20Hotel&city=Abha">
            Book Hotel
          </a>
        </li>
      </ul>
    </article>

  </div>
</section>
</main>

<?php include "includes/footer.php"; ?>
