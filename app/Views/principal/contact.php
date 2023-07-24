<?php
include_once 'app/Views/template/header.php';
include_once 'app/Views/template/navbar.php';
include_once 'app/Views/template/aside.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Contactos</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="col-12">
      <form action="">
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" placeholder="Introduzca su nombre">
        </div>
        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" placeholder="Introduzca su apellido">
        </div>
        <div class="form-group">
          <label for="">Correo electronico</label>
          <input type="email" class="form-control" placeholder="Introduzca su correo electronico">
        </div>
        <div class="form-group">
          <label for="">Telefono</label>
          <input type="number" class="form-control" placeholder="Introduzca su Telefono">
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje</label>
          <textarea class="form-control" name="mensaje" rows="5" id="mensaje"></textarea>
        </div>
        <div class="form-group">
         <input type="button" class="btn btn-primary" value="Enviar">
         <input type="button" class="btn btn-primary" value="Borrar">
        </div>
      </form>
    </div>

  </section>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once 'app/Views/template/footer.php' ?>