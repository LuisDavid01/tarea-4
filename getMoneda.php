<?php 
include "db.php";
    
    //sentencia que busca los diferentes tipos de monedas
    $sql = "SELECT DISTINCT moneda_origen FROM conversor";

    $respuesta = mysqli_query($conexion,$sql);
    $arrayMonedas= [];
    while($moneda = mysqli_fetch_assoc($respuesta)){
        $arrayMonedas[] = $moneda['moneda_origen'];

    }
    //se cierra la conexion con la base de datos
    $conexion ->close();

    //se devuelve un json con las monedas encontradas en la base de datos
    echo json_encode($arrayMonedas);
    exit;
?>