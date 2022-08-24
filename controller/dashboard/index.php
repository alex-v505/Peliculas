<?php
    include '../../model/conectar.php';
    //numerico de Peliculas
    $sql = "SELECT count(pel_id) as total_pel FROM peliculas ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_pel = $row['total_pel'];
    include '../../model/desconectar.php';
    //Nnumerico de socios
    include '../../model/conectar.php';
    $sql = "SELECT count(soc_id) as total_soc FROM socios ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_soc = $row['total_soc'];
    include '../../model/desconectar.php';
    //Numerico de alquileres
    include '../../model/conectar.php';
    $sql = "SELECT count(alq_id) as total_alq FROM alquileres ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_alq = $row['total_alq'];
    include '../../model/desconectar.php';
    //Meses de alquileres
    include '../../model/conectar.php';
    $sql = "SET lc_time_names = 'es_ES'; ";
    $sql_mes = "SELECT DISTINCT MONTHNAME(alq_fecha_desde) AS mes FROM alquileres;";
    $result = $conn->query($sql);
    $result_mes = $conn->query($sql_mes);
    $i = 0; 
    if ($result_mes->num_rows > 0) {          
        while($row = $result_mes->fetch_assoc()) {
            $total_mes[$i]=($row['mes']);
            $total_mes_js[$i] = json_decode($total_mes[$i]);
            $i++;
        }
    }

    print_r($total_mes);
    include '../../model/desconectar.php';
?>