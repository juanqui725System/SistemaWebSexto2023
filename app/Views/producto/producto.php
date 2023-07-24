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
          <h1 class="m-0">Producto</h1>
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
       foreach ($data['productos'] as $producto)
       {
      ?>
      <div class="col-12 col-md-4 mb-4 text-center">
        <div class="card h-100">
          <div class="card-head bg-primary">
          <?php echo $producto['NOMBRE'];?>
          </div>
          <div class="card-body">
            <a href="<?php echo BASE_URL.'producto/detalleProducto/'.$producto['ID'];?>">
              <img src="<?php echo $producto['IMAGEN'];?>" class="card-img-top" alt="<?php echo $producto['NOMBRE'];?>">
            </a>
            <ul class="list-unstyled d-flex justify-content-between">
              <li>
                <i class="text-warning fa fa-star"></i>
                <i class="text-warning fa fa-star"></i>
                <i class="text-warning fa fa-star"></i>
                <i class="text-muted fa fa-star"></i>
                <i class="text-muted fa fa-star"></i>
              </li>
              <li class="text-muted text-right"><?php echo $producto['PRECIO'].' '. MONEDA;?></li>
            </ul>
            <a href="<?php echo BASE_URL.'producto/detalleProducto/'.$producto['ID'];?>" class="h2 text-decoration-none text-dark"><?php echo $producto['NOMBRE'];?></a>
            <p class="card-text">
            <?php echo $producto['DESCRIPCION'];?>
            </p>
          </div>

        </div>
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