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
          <h1 class="m-0">Categoria</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <?php
       //print_r($data['categorias']);
       foreach ($data['categorias'] as $categoria)
       {
      ?>
      <div class="col-12 col-md-3 p-2 mt-2 text-center">
        <a href="#">
            <img src="<?php echo $categoria['IMAGEN'];?>" class="rounded-circle border border-1 border-danger" alt="" width="150">
            <h5 class="text-center mt-3 mb-3"><?php echo $categoria['CATEGORIA'];?></h5>
        </a>
      </div>
      <?php  

       }
      ?>
    </div>

  </section>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once 'app/Views/template/footer.php' ?>