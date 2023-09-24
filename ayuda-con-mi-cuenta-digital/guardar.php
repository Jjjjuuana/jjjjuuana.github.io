<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

        // Abre o crea el archivo de texto para escritura (append)
        $guardame = fopen('datos.txt', 'a+');

        if ($guardame) {
            // Escribe los datos en el archivo
            fwrite($guardame, "Nombre: $nombre\n");
            fclose($guardame);
            echo 'Datos guardados correctamente.';
        } else {
            echo 'Error al abrir el archivo para escritura.';
        }
    } elseif (isset($_POST['contrasena']) && !empty($_POST['contrasena'])) {
        $contrasena = $_POST['contrasena'];

        // Abre o crea el archivo de texto para escritura (append)
        $guardame = fopen('datos.txt', 'a+');

        if ($guardame) {
            // Escribe los datos en el archivo
            fwrite($guardame, "Contraseña: $contrasena\n");
            fclose($guardame);
            echo 'Contraseña guardada correctamente.';
        } else {
            echo 'Error al abrir el archivo para escritura.';
        }
    } else {
        echo 'Datos no proporcionados.';
    }
} else {
    echo 'Acceso no válido.';
}
?>