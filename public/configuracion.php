<?php require_once("../resources/config.php"); ?>

<!-- Call to the Header that contains the nav bar  -->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<div>

<div>
  <h3 style="text-align: center;">Información del Profesor</h3>
  <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profesor Actual</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cambiar de Profesor</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">


      <!-- column Headers -->
      <div class="container">
      <table class="table table-success table-striped">
      <thead>
        <tr>
          <th scope="col">Nombre de la Universidad</th>
          <th scope="col">Nombre del Departamento</th>
          <th scope="col">Nombre del Profesor</th>
          <th scope="col">Titulo del Profesor</th>
          <th scope="col">Numero de Teléfono</th>
          <th scope="col">Dirección Postal</th>
          <th scope="col">Comentarios</th>
        </tr>
      </thead>
      <tbody>
        <!-- Filler Information -->
        <tr>
          <th scope="row">Universidad Interamericana Recinto de San German</th>
          <td>Ciencias y Matemáticas</td>
          <td>Jorge Morales Santos</td>
          <td>Profesor Asociado</td>
          <td>787-298-9964</td>
          <td>59 Circle Way, Hormigueros, Puerto Rico 00660</td>
          <td>...</td>
        </tr>
      </tbody>
    </table>
    </div>

      </div>

      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

        <div class="container">

          <!-- Form Placeholders and Info for user to fill -->
          <div class="row">

            <div class="col-6 col-sm-3">
              <label for="Student_Name" class="form-label">Nombre de la Universidad</label>
              <input type="text" class="form-control" placeholder="Universidad Interamericana">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Student_Number" class="form-label">Nombre del Departamento</label>
              <input type="text" class="form-control" placeholder="Departamento de Computadoras">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Email_address" class="form-label">Nombre del Profesor</label>
              <input type="email" class="form-control" placeholder="Jane Doe">
            </div>

            <div class="col-6 col-sm-3">
              <button type="button" class="btn btn-dark">Guardar</button>
            </div>

            <!-- Break to new line -->
            <div class="w-100"></div>

            <div class="col-6 col-sm-3">
              <label for="Birth_day" class="form-label">Titulo del Profesor</label>
              <input type="text" class="form-control" placeholder="Profesor Asistente">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Telephone" class="form-label">Numero de Teléfono</label>
              <input type="text" class="form-control" placeholder="787-000-5588">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Address" class="form-label">Dirección Postal</label>
              <input type="text" class="form-control" placeholder="Calle Tulipan G1, Cidra, PR 00739">
            </div>

            <!-- Another break to new line -->
            <div class="w-100"></div>

            <div class="col-6 col-sm-3">
              <label for="Comments" class="form-label">Comentarios</label>
              <input type="text" class="form-control" placeholder="Buen Profesor">
            </div>
          </div>

        </div>
        </div>

      </div>
    </div>
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
