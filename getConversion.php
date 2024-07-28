<?php 
    include "db.php";

    if ( !isset($_POST['monedaBase'], $_POST['monedaConvertir'], $_POST['monto']) ) {
        
        exit('llene los campos solicitados');
    }
    //se inicializa la variable del resultado de la conversion
    $resultado_conversion = 0;
    //consulta sql stmt

    if ($stmt = $conexion->prepare('SELECT tipo_cambio FROM conversor WHERE moneda_origen = ? AND moneda_destino = ? ')) {
        
        $stmt->bind_param('ss', $_POST['monedaBase'], $_POST['monedaConvertir'] );
        $stmt->execute();
        
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($tipo_cambio);
            $stmt->fetch();
            $resultado_conversion =  $_POST['monto'] * $tipo_cambio;
           
            

        
         }
    }
//devolver json

echo json_encode($resultado_conversion);
$stmt->close();
exit;
?>