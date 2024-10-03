<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $lista_libros = array(
        "1" => "Don Quijote", "2" => "The Art of War"
    );

    $lista_clientes = array(
        "1"=> "Jesua López Racero", "2"=> "Ricardo Pérez López"
    );

    define("DURACION_PRESTAMO", 30);

    $fecha_prestamo = new DateTimeImmutable();
    $fecha_vuelta = $fecha_prestamo->add(new DateInterval("P" . DURACION_PRESTAMO . "D"));

    if (isset($_POST["codcliente"])) {
        $codcliente = $_POST["codcliente"];
        if (isset($lista_clientes[$codcliente])) {
            $nomcliente = $lista_clientes[$codcliente];
        }
    }

    if (isset($_POST["isbn"])) {
        $isbn = $_POST["isbn"];
        if (isset($lista_libros[$isbn])) {
            $nomlibro = $lista_libros[$isbn];
        }
    }
    ?>
</body>
</html>


