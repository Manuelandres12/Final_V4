<?php require_once("../resources/config.php"); ?>

<!-- Call to the Header that contains the nav bar  -->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<div>

<div>
<h3 style="text-align: center;">Compañias y sus Departamentos</h3>
<div class="d-flex align-items-start">
<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Lista de Compañías</button>
  <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Añade Compañía Nueva</button>
  <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" disabled role="tab" aria-controls="v-pills-profile" aria-selected="false">Añade Departmento Nuevo</button>

<!-- Boton de Departamentos disabled por ahora -->

</div>
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

    <!-- column Headers -->
    <div class="container">
    <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Nombre de Compañías</th>
        <th scope="col">Nombre del Dueño</th>
        <th scope="col">Nombre del Departamento</th>
        <th scope="col">Dirección Postal</th>
        <th scope="col">Numero de Teléfono</th>
        <th scope="col">Correo Electrónico</th>
        <th scope="col">Commentarios</th>
      </tr>
    </thead>
    <tbody>
      <!-- Filler Information -->
      <tr>
        <th scope="row">Apple Inc</th>
        <td>Tim Cook</td>
        <td>Information Security</td>
        <td>1 Apple Park Way, Cupertino, California, United States 95014</td>
        <td>800–692–7753</td>
        <td>appleid@id.apple.com</td>
        <td>No proper Owner, Tim Cook is also the CEO.</td>
      </tr>
      <tr>
        <th scope="row">Hospital de la Concepción</th>
        <td>Edgar Crespo Campos</td>
        <td>Departamento de Matemáticas</td>
        <td>Carr. #2 Km 173.4, San Germán, Puerto Rico 00683</td>
        <td>+1 787-659-5959</td>
        <td>centrodecontacto@hospitalconcepcion.org</td>
        <td>Ten cuidado al salir. Carros no dan paso.</td>
      </tr>
      <tr>
        <th scope="row">HP Inc.</th>
        <td>Enrique Lores</td>
        <td>Printer Servicing</td>
        <td>1501 Page Mill Road, Palo Alto, California, United States 94304</td>
        <td>800-474-6836</td>
        <td>Lores@hp.com</td>
        <td>New internships available</td>
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
          <label for="Company_Name" class="form-label">Nombre de Compañías</label>
          <input type="text" class="form-control" placeholder="Google">
        </div>

        <div class="col-6 col-sm-3">
          <label for="Owner_Name" class="form-label">Dueño o CEO de la Compañia</label>
          <input type="text" class="form-control" placeholder="Tim Cook">
        </div>

        <div class="col-6 col-sm-3">
          <label for="Company_Address" class="form-label">Direccion Postal</label>
          <input type="email" class="form-control" placeholder="P Sherman, 42 Wallaby Way, Sydney">
        </div>

        <div class="col-6 col-sm-3">
          <button type="button" class="btn btn-dark">Submit</button>
        </div>

        <!-- Break to new line -->
        <div class="w-100"></div>

        <div class="col-6 col-sm-3">
          <label for="Company_telefone" class="form-label">Numero de Teléfono</label>
          <input type="text" class="form-control" placeholder="787-456-1021">
        </div>

        <div class="col-6 col-sm-3">
          <label for="Company_Email" class="form-label">Correo Electrónico</label>
          <input type="text" class="form-control" placeholder="Vampo123@gmail.com">
        </div>

        <div class="col-6 col-sm-3">
          <label for="Department" class="form-label">Nombre de Departamento</label>
          <input type="text" class="form-control" placeholder="Departamento de Matemáticas">
        </div>

          <!-- Another break to new line -->
          <div class="w-100"></div>

          <div class="col-6 col-sm-3">
            <label for="Nombre del Encargado de Departamento" class="form-label">Nombre del Encargado de Departamento</label>
            <input type="text" class="form-control" placeholder="Eric Cartman">
          </div>

        <div class="col-6 col-sm-3">
          <label for="Comments" class="form-label">Commentarios</label>
          <input type="text" class="form-control" placeholder="Buena Compañía">
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
