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
          <h1 class="m-0">Detalle Producto</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-7 mt-5">
        <div class="card">
          <div class="card-body">
            <h1 class="h2"><?php echo $data['producto']['NOMBRE'];?></h1>
            <p class="h3 py-2"><?php echo $data['producto']['PRECIO'].' '. MONEDA;?></p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <h6>BRand:</h6>
              </li>
              <li class="list-inline-item">
                <p class="text-muted"><strong>EASY Wear</strong></p>
              </li>
            </ul>
            <h6>Categoria</h6>
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quis facilis. Eum similique, sunt, sit architecto iste fuga illo mollitia itaque vel dolorum temporibus quam harum, repudiandae sequi cupiditate fugit?

            </p>
          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once 'app/Views/template/footer.php' ?>