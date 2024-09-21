
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <?php
          if($_SESSION['id_rol']==1){
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item" href="<?php echo getUrl("Usuario","Usuario","getCreate");?>">Registrar</a></li>
            
            <li><a class="dropdown-item" href="<?php echo getUrl("Usuario","Usuario","getUsers");?>">Consultar</a></li>
          </ul>
        </li>
        <?php
          }
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if($_SESSION['id_rol']==1){?>
            <li><a class="dropdown-item" href="<?php echo getUrl("Producto","Producto","getCreate");?>">Registrar</a></li>
            <?php }?>
            <li><a class="dropdown-item" href="<?php echo getUrl("Producto","Producto","getProducto");?>">Consultar</a></li>
          </ul>
        </li>


        <?php if( $_SESSION['id_rol']==1){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Roles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         
            <li><a class="dropdown-item" href="<?php echo getUrl("Roles","Roles","getCreate");?>">Registrar</a></li>
            
            <li><a class="dropdown-item" href="<?php echo getUrl("Roles","Roles","getRoles");?>">Consultar</a></li>
          </ul>
        </li>
        <?php } ?>




        <?php if( $_SESSION['id_rol']==1){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("Cliente","Cliente","getCreate");?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Cliente","Cliente","getcliente");?>">Consultar</a></li>
          </ul>
        </li>
        <?php } ?>


        <?php if( $_SESSION['id_rol']==1){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("Categoria","Categoria","getCreate");?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Categoria","Categoria","getcategoria");?>">Consultar</a></li>
          </ul>
        </li>
        <?php } ?>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Facturar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if( $_SESSION['id_rol']==1){ ?>
            <li><a class="dropdown-item" href="<?php echo getUrl("Factura","Factura","getCreate");?>">Registrar</a></li>
          <?php } ?>
            <li><a class="dropdown-item" href="<?php echo getUrl("Factura","Factura","getfactura");?>">Consultar</a></li>
          </ul>
        </li>

        
        <li class="nav-item dropdown ms-auto">
          <a class="nav-link dropdwn-toggle text-dranger" href="<?php echo getUrl("Login","Login","cerrar");?>">Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>