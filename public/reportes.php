<?php require_once("../resources/config.php"); ?>

<!-- Call to the Header that contains the nav bar  -->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>



  <div>

<div>
    <h3 style="text-align: center;">Reportes</h3>
  <div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Default Reporte</button>
      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" disabled role="tab" aria-controls="v-pills-profile" aria-selected="false">Editar Reporte</button>
    </div>

    <div>
      <!-- Last stitch effort to center the image -->
      <style>
      .center{
        text-align: center;
      }
      </style>

      <!-- Call to images -->
    <img src="../resources/images/default_report2.png" width="700" height="665" alt="..." class="center">
      <img src="../resources/images/default_report.png" width="700" height="665" alt="..." class="center">
    </div>
</div>

        <!-- Line to divide info from footer -->
       <?php?>
        <h4><a href="#"><?php?></a> </h4>
        <hr>
        <h4 class=""><?php?></h4>
        <?php?>

        <!-- Call to Footer -->
    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
