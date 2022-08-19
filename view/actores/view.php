<?php include '../template/header.php' ?>
<?php include '../../controller/actores/delete.php'?>
<section class="content">
    <div>
        <H3>Datos de actor</H3>
        <br><br>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Datos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                        <th scope="row" id="act_id">ID</th>
                        <td><?php echo $row['act_id'];?></td>
                    </tr>
                    <tr>
                        <th scope="row" id="act_nombre">Nombre</th>
                        <td><?php echo $row['act_nombre'];?></td>
                    </tr>

                </tbody>
        </table>
        </div>
        <form action="../../controller/actores/delete.php" method="post">
            <input type="hidden" name="act_id" value="<?php echo $row['act_id'];?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
    </div>

</section>
<?php include '../template/footer.php' ?>