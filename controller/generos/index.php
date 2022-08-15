<?php
<<<<<<< HEAD
    include '../../model/conectar'

    $sql = "SELECT * FROM generos";
    $result = $conn->query($sql);

    include '../../model/desconectar'
=======
    include '../../model/conectar.php';
    $sql = "SELECT * FROM generos";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
>>>>>>> 9218f8ef6e9c22b179f28d5dc1b0c178a97907e6
?>