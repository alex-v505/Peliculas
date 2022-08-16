<?php include '../template/header.php' ?>

<?php include '../../controller/alquileres/index.php' ?>
<div class='container'>

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col align-self-start">
                    <h2>Alquileres Registrados</h2>
                </div>
                <div class="col align-self-center">

                </div>
                <div class="col align-self-end">
                    <button type="button" class="btn btn-success">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="d-flex justify-content-center"></div>
    <div class="col-sm-9 bg-light p-3 border">

        <div class="p-2 w-100">


            <table class="table " >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID_Socio</th>
                        <th scope="col">ID_Pelicula</th>
                        <th scope="col">Fecha_Desde</th>
                        <th scope="col">Fecha_Hasta</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Entrega</th>
                        <th scope="col" >Opciones</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  //Proceso de creacion de tabla y relleno de datos de la BDD
                    if ($result->num_rows > 0) {
                      
                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<th scope="row">'.$row["alq_id"].'</th>';
                        echo '<th scope="row">'.$row["soc_id"].'</th>';
                        echo '<th scope="row">'.$row["pel_id"].'</th>';
                        echo '<th scope="row">'.$row["alq_fecha_desde"].'</th>';
                        echo '<th scope="row">'.$row["alq_fecha_hasta"].'</th>';
                        echo '<th scope="row">'.$row["alq_valor"].'</th>';
                        echo '<th scope="row">'.$row["alq_fecha_entrega"].'</th>';
                        echo '<th scope="row">
                            <a class="text-success" href="update.php"><i class="fa-solid fa-pen"></i></a>
                            <a href="view.php"><i class="fa-solid fa-search"></i></a>
                            <a class="text-danger" href="delete.php"><i class="fa-solid fa-trash-can"></i></a>
                        </th>';
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
                    <tr>
                        
                        <td> </td>
                        <td> </td>

                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
</div>
</div>
</div>
<script src="https://kit.fontawesome.com/94ae563b14.js" crossorigin="anonymous"></script>
<?php include '../template/footer.php' ?>