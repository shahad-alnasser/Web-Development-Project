<?php
$pageTitle = "Get a Visa | Visit Saudi";
include "includes/header.php";

if (!isset($_SESSION["user_id"])) {
    echo "<script>alert('Please login first.'); window.location='login.php';</script>";
    exit;
}

$userName = $_SESSION["user"];
?>

<main class="page">
<section class="content-section narrow">

  <h3>Visa Application</h3>

  <form class="form" id="visaForm">

    <label for="nat">Nationality</label>
    <select id="nat" required>
      <option value="">Select Nationality</option>
      <option>Saudi</option>
      <option>Egyptian</option>
      <option>Indian</option>
      <option>Pakistani</option>
      <option>Sudanese</option>
    </select>

    <label for="vtype">Visa Type</label>
    <select id="vtype" required>
      <option value="">Select type</option>
      <option value="eVisa">eVisa</option>
      <option value="Tourist Visa">Tourist Visa</option>
      <option value="Business Visa">Business Visa</option>
    </select>

    <p id="visaInfo"
       style="background:#eef; padding:10px; border-radius:6px; display:none;">
    </p>

    <button type="submit" class="btn">Apply</button>
  </form>

</section>
</main>

<script>
// Visa Type Description
document.getElementById("vtype").addEventListener("change", function () {
  const info = document.getElementById("visaInfo");
  const type = this.value;

  if (!type) {
    info.style.display = "none";
    return;
  }

  let text = "";
  if (type === "eVisa") {
    text = "eVisa: A fast electronic visa for short-term visits.";
  } else if (type === "Tourist Visa") {
    text = "Tourist Visa: Explore Saudi Arabia’s tourism destinations.";
  } else if (type === "Business Visa") {
    text = "Business Visa: For official meetings and business activities.";
  }

  info.textContent = text;
  info.style.display = "block";
});

// Apply Validation
document.getElementById("visaForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const nationality = document.getElementById("nat").value;
  const visaType = document.getElementById("vtype").value;

  if (nationality === "") {
    alert("Please select your nationality.");
    return;
  }

  if (visaType === "") {
    alert("Please select a visa type.");
    return;
  }

  alert("Dear <?= htmlspecialchars($userName) ?>, you have selected " + visaType +
        ". You will now be redirected to the Home page.");

  setTimeout(function () {
    window.location.href = "index.php";
  }, 1500);
});
</script>

<?php include "includes/footer.php"; ?>
