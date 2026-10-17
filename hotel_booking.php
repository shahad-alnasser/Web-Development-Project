<?php
$pageTitle = "Hotel Booking | Visit Saudi";
include "includes/header.php";

if (!isset($_SESSION["user_id"])) {
    echo "<script>alert('Please login first to book a hotel.'); window.location='login.php';</script>";
    exit;
}

$userName = $_SESSION["user"];
?>

<main class="page">
<section class="content-section narrow">

  <h3>Hotel Booking</h3>

  <form class="form" id="hotelForm">

    <label for="hotel">Hotel</label>
    <input id="hotel" type="text" required>

    <label for="city">City</label>
    <select id="city" required>
      <option value="">Select City</option>
      <option>Riyadh</option>
      <option>Jeddah</option>
      <option>AlUla</option>
      <option>Abha</option>
      <option>Taif</option>
      <option>Dammam</option>
    </select>

    <label for="checkin">Check-in</label>
    <input id="checkin" type="date" required>

    <label for="checkout">Check-out</label>
    <input id="checkout" type="date" required>

    <label for="guests">Guests</label>
    <input id="guests" type="number" min="1" max="10" value="2" required>

    <label for="email">Email</label>
    <input id="email" type="email" placeholder="you@example.com" required>

    <button type="submit" class="btn">Submit</button>
  </form>

</section>
</main>

<script>
// Auto-fill hotel name from URL
const params = new URLSearchParams(window.location.search);
if (params.get("hotel")) {
  document.getElementById("hotel").value = params.get("hotel");
}

// Booking validation
document.getElementById("hotelForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const checkInValue = document.getElementById("checkin").value;
  const checkOutValue = document.getElementById("checkout").value;

  if (!checkInValue || !checkOutValue) {
    alert("Please select both check-in and check-out dates.");
    return;
  }

  const today = new Date();
  today.setHours(0, 0, 0, 0);

  const minCheckIn = new Date(today);
  minCheckIn.setDate(today.getDate() + 1); // at least 1 days from today

  const checkInDate = new Date(checkInValue);
  const checkOutDate = new Date(checkOutValue);

  if (checkInDate < minCheckIn) {
    alert("Check-in date must be at least 1 days from today.");
    return;
  }

  if (checkOutDate <= checkInDate) {
    alert("Check-out date must be after check-in date.");
    return;
  }

  alert("Thank you <?= htmlspecialchars($userName) ?>! Your hotel booking has been submitted.");
  window.location.href = "index.php";
  
});
</script>

<?php include "includes/footer.php"; ?>
