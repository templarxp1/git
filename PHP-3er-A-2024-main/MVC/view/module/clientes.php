<?php
    include "view/module/header.php";
    
?>

<center><h1>Clientes</h1></center> 
<div class="container">
    <div class="row">
        <?php 
        $listaCliente = new Clientes();
        $data = $listaCliente->ListaClientes();

        
        ?>
    <table class="table">
  <thead>
 
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Razon Social</th>
      <th scope="col">Nit</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach ($data as $key => $value) { ?>
            <?php  echo $value["Ci"];?>
        
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td><?php  echo $value["RazonSocial"];?></td>
      <td><?php  echo $value["Ci"];?></td>
    </tr>
    <?php
        }
        ?>
  </tbody>
</table>
    </div>
</div>
