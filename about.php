<?php
$pageTitle = "About Us | Visit Saudi";
include "includes/header.php";
?>

<main class="page">

<section class="content-section narrow">
  <h3>About the Developer</h3>

  <div class="slideshow-container">

    <div class="slide fade">
      <h4>Interests </h4>
      <p>
Our interests include technology, programming, artificial intelligence, and developing innovative digital solutions. We are also interested in learning new skills, collaborating on projects, and improving our technical and academic abilities.
      </p>
    </div>

    <div class="slide fade">
      <h4>Personal Information</h4>
      <p><strong>Name:</strong> Shaden ,shahad ,maria</p>
      <p><strong>University:</strong> Imam Muhammad Ibn Saud Islamic University</p>
      <p><strong>College:</strong> CCIS</p>
    </div>

    <div class="slide fade">
      <h4>Degrees</h4>
      <p>
       We are undergraduate students majoring in Information Systems,
 with academic background in programming, databases, 
and information technology fundamentals.      </p>
    </div>

   

    
    <!-- Navigation -->
    <a class="prev" onclick="changeSlide(-1)">❮</a>
    <a class="next" onclick="changeSlide(1)">❯</a>

  </div>

  <div class="dots">
    <span class="dot" onclick="setSlide(1)"></span>
    <span class="dot" onclick="setSlide(2)"></span>
    <span class="dot" onclick="setSlide(3)"></span>
  
  </div>

</section>

</main>

<script src="js/slideshow.js"></script>

<?php include "includes/footer.php"; ?>
