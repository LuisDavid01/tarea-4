<?php
include "db.php";
    //Se seleccionan todas las imagenes de los paises en la base de datos
    $sql = "SELECT IMAGEN FROM imagen_pais";

    //se ejecuta la consulta
    $respuesta = mysqli_query($conexion,$sql);
    $arrayPais= [];
    while($pais = mysqli_fetch_assoc($respuesta)){
        $arrayPais[] = $pais['IMAGEN'];

    }
    
    $conexion ->close();

    //Se devuelve el json
    echo json_encode($arrayPais);
    exit;
?>