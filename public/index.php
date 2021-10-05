<?php require_once("../resources/config.php"); ?>

<!-- Call to the Header that contains the nav bar  -->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<!-- Emplementation of a carousel to show welcome images to the user -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div style="text-align: center;" class="carousel-item active">
      <img src="../resources/images/college.gif" width="1800" height="700" alt="...">
    </div>
    <div style="text-align: center;" class="carousel-item">
      <img src="../resources/images/hw.gif" width="1800" height="700" alt="...">
    </div>
    <div style="text-align: center;" class="carousel-item">
      <img src="../resources/images/study.gif" width="1800" height="700" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

          <!-- Line to divide info from footer -->
          <h4><a href="#"><?php?></a> </h4>
          <hr>
          <h4 class=""><?php?></h4>

  <?php?>

  <!-- Call to the Footer -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
