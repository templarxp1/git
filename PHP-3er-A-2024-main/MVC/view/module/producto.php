<?php
    include "view/module/header.php";
?>
<center><h1>PRODUCTO</h1></center> 

<div class="container">
    <h1>Modal con Bootstrap 5</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
      Abrir Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal de Ejemplo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Contenido del modal...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar cambios</button>
          </div>
        </div>
      </div>
    </div>

  </div>