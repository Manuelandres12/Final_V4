<?php require_once("../resources/config.php"); ?>

<!-- Call to the Header that contains the nav bar  -->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

  <div>

<div>
    <h3 style="text-align: center;">Registro de Estudiantes</h3>
  <div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Lista de Estudiantes</button>
      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Añade Estudiante Nuevo</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

        <!-- column Headers -->
        <div class="container">
        <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Numero de Estudiante</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Numero de Teléfono</th>
            <th scope="col">Dirección Postal</th>
            <th scope="col">Compañía</th>
            <th scope="col">Departamento</th>
            <th scope="col">Comentarios</th>
          </tr>
        </thead>
        <tbody>
          <!-- Filler Information -->
          <tr>
            <th scope="row">Mark Hoppus</th>
            <td>E00474279</td>
            <td>Overboard@gmail.com</td>
            <td>3/15/1972</td>
            <td>787-258-2564</td>
            <td>42 Wally Way, Hormigueros, Puerto Rico 00660</td>
            <td>SweetWater</td>
            <td>Music Theory</td>
            <td>Bass Player</td>
          </tr>
          <tr>
            <th scope="row">Ben Diez</th>
            <td>E00547894</td>
            <td>Diez123@yahoo.com</td>
            <td> 4/5/1978</td>
            <td>787-963-7894</td>
            <td>50 Dark Drive, Southpark, Colorado 80906</td>
            <td>Southpark Studios</td>
            <td>Graphic Design</td>
            <td>Graphic Design nternship</td>
          </tr>
          <tr>
            <th scope="row">Kate Walton</th>
            <td>E00851236</td>
            <td>WaltonBoMM12@gmail.com</td>
            <td>3/20/1990</td>
            <td>939-254-8888</td>
            <td>31 West Avenue, New York, New York 10010</td>
            <td>IBM</td>
            <td>Database Services</td>
            <td>Bad Experience with Host</td>
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
              <label for="Student_Name" class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Pablo Juan">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Student_Number" class="form-label">Numero de Estudiante</label>
              <input type="text" class="form-control" placeholder="E00-00-0000">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Email_address" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" placeholder="name@gmail.com">
            </div>

            <div class="col-6 col-sm-3">
              <button type="button" class="btn btn-dark">Guardar</button>
            </div>

            <!--Break to new line -->
            <div class="w-100"></div>

            <div class="col-6 col-sm-3">
              <label for="Birth_day" class="form-label">Fecha de Nacimiento</label>
              <input type="text" class="form-control" placeholder="2/4/2021">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Telephone" class="form-label">Numero de Teléfono</label>
              <input type="text" class="form-control" placeholder="787-000-0000">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Address" class="form-label">Dirección Postal</label>
              <input type="text" class="form-control" placeholder="La calle abajo de casa">
            </div>

            <div class="w-100"></div>

            <div class="col-6 col-sm-3">
              <label for="Company" class="form-label">Compañía</label>
              <input type="text" class="form-control" placeholder="Google">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Department" class="form-label">Departamento</label>
              <input type="text" class="form-control" placeholder="Departamento de Redes">
            </div>

            <div class="col-6 col-sm-3">
              <label for="Comments" class="form-label">Comentarios</label>
              <input type="text" class="form-control" placeholder="Buen Estudiante">
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

    <!-- Call to footer -->
    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
