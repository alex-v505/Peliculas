<?php
    include '../../model/conectar'

    $sql = "SELECT * FROM generos";
    $result = $conn->query($sql);

    include '../../model/desconectar'
?>