<?php

    if(isset($_GET[apl_id]))
    {
    include '../../model/conectar.php';
    $id=$_GET['apl_id'];
    $sql = "SELECT ap.apl_id, a.act_nombre, p.pel_nombre, ap.apl_papel 
            FROM actor_peliculas ap, actores a, peliculas p
            WHERE  ap.pel_id = p.pel_id
            AND ap.act_id = a.act_id
            AND ap.apl_id = ".$id;
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    }
    if(isset($_POST['apl_id']))
    {   
        include '../../model/conectar.php';
        $id=$_POST['apl_id'];
        $id=$_GET['apl_id'];
        $sql = "DELETE FROM actor_peliculas
                WHERE  apl_id = ".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/index.php')
        //Proceso de creacion de tabla y relleno de datos de la BDD
        include '../../model/desconectar.php';
    }


    
?>