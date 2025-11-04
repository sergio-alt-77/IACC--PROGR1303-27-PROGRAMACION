<?php
// Recepción de usario mediante formulario
$login_user = $_POST['usuario'];

// Recepción de contraseña mediante formulario
$login_pass = $_POST['contraseña'];

// Usuario y contraseña permitido al sistema
$user = "Sergio1";
$pass = "PassworA8Q";

// Strpos Función nativa del lenguaje
// Strlen Función nativa del lenguaje
if (strpos($login_pass, ' ') !== false || strlen($login_pass) > 10) {
    echo "Error: la contraseña tiene espacios o excede la longitud máxima.";
} elseif ($login_user === $user && $login_pass === $pass) {
    echo "Acceso permitido";
} else {
    echo "Usuario o clave incorrectos";
}
