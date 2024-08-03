<?php
//iniciamos la sesion
/*importante si requiere probar cambiar el nombre y el usuario de la base de datos
  en el archivo db.php.
*/
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <!--importe bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="assets/dollar.png" /> <!--creditos para NajmunNahar, autor del icono -->

    <!-- fuente de google --key api 4e5d7010bf277fe59e13f254-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!--estilos para cambiar la fuente del proyecto-->
    <link href="/styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        
    </script>

    <title>Conversor de monedas</title>
</head>

<body>
    <main>
        <!--aca inicial el header-->
        <header class="py-5">
            <div class="container px-5 text-center ">
                <img class="rounded mx-auto d-block" src="assets/transaction.png" alt="transacción" width="200" />
                <h1 class="">Conversor de monedas</h1>
                <h6 class="ml-0">Autor: Luis David Miranda Villalta</h6>
            </div>


        </header>
        <section class="bg-light py-5">
            <div class="container d-flex justify-content-center align-items-center ">
                <!--Form que procesa la petición a la api por medio de javascript-->
                <form action="javascript:;" method="POST" onsubmit="obtenerMonto()">
                    <label for="monedaBase">Moneda base:</label>
                    <select id="monedaBase" class="form-select text-primary mb-3" aria-label="Default select example" required="true">
                        <option value=""> selecciona una moneda</option>
                    </select>

                    <label for="monedaConvertir">Moneda a convertir :</label>
                    <select id="monedaConvertir" class="form-select text-danger mb-3" aria-label="Default select example" required="true">
                        <option value=""> selecciona una moneda</option>
                    </select>
                    <div class="input-group mb-3">
                        <label for="monto">Monto  </label>
                        <input id="monto" type="number" class="text-dark " value="100"  required="true"/>
                        <button type="submit" class=" d-block btn btn-outline-success "> Resultado</button>
                    </div>
                    <!--Aqui esta el resultado de la conversión-->
                    <p class="text-success text-center " id="resultado"></p>
                </form>






            </div>
        </section>
        <!--sección del footer-->
        <footer class="text-center">
        <p >Monedas soportadas v2</p>
            <div id="bandera-pais"></div>
        <p class=" mt-2">Copyright &copy; Conversor de monedas 2024 </p>
        </footer>
    </main>
   <script src="script.js"></script>
    <!--javascript para convertir los diferentes tipos de cambio-->
    <!--javascript de bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>