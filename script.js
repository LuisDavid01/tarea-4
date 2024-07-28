

  $(document).ready( function() {
    $.ajax({
        url: 'getMoneda.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            let monedaBase = $('#monedaBase');
            $.each(data, function(index, value) {
                monedaBase.append($('<option>', {
                    value: value,
                    text: value
                }));
            });

            let monedaConvertir = $('#monedaConvertir');
            $.each(data, function(index, value) {
                monedaConvertir.append($('<option>', {
                    value: value,
                    text: value
                }));
            });
        }
    });
});

//muestra las banderas de los paises soportados
$(document).ready( function() {
    
    $.ajax({
        url: 'mostrarBanderas.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            let pais = $('#bandera-pais');
            let imagenAncho = 200;
            $.each(data, function(index, value) {
                pais.append($('<img>', {
                    class:"rounded ",
                    src: value,
                    alt: value,
                    width: "32"
                    
                }));
            });
        }
    });
});

function obtenerMonto() {
    let monedaOrigen = $("#monedaBase").val();    
    let monedaDestino = $("#monedaConvertir").val();
    let montoConvertir = $("#monto").val(); 
    
        $.ajax({
            url: 'getConversion.php', 
            type: 'POST',
            data: {monedaBase: monedaOrigen,
              monedaConvertir: monedaDestino,
              monto: montoConvertir
            },
            success: function(response) {
                $("#resultado").text(response); // Opcional: mostrar en el documento
            }
        });
    };




