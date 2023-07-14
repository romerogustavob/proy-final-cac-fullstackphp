<?php include 'header.php';?>
<?php $conexion = new conexion();# es un objeto de tipo conexion,
      $proyectos= $conexion->consultar("SELECT * FROM `proyectos`"); ?>

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Administrador de Portfolio Personal</h1>
        <p class="lead">Proyectos Cargados en base de datos</p>       
    </div>
</div>
<div class ="container bg-secondary pb-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php #leemos proyectos 1 por 1
        foreach($proyectos as $proyecto){ ?>
            <div class="col">
                <div class="card border border-3 shadow">
                    <img class="card-img-top" style="object-fit:cover;" src="./imagenes/<?php echo $proyecto['imagen'];?>" alt="" width="300">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $proyecto['nombre'];?></h5>
                        <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include 'footer.php'; ?>
