<?php

if($_SESSION['estado'] != true){
    header('Location: login');
}
    include "view/module/header.php";
?>

<center><h1>Bienbenido al SISTEMA SIQ <?php echo  $_SESSION["usuasrio"];?></h1> </center>
<div class="container">
    <div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Producto</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">100</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Clientes</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">100</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Pedidos</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">100</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Usuarios</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">100</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
        </div>
    </div>
    
<!-- <img src="view/img/logo-tec.png" alt=""> -->
    </div>
</div>
    