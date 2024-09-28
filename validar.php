<?php
session_start ();
require "./datadb.php";


$usuario = $_POST["usuario"];
$contra = $_POST["contra"];

$logueado = false;

foreach ($users as $user) {
    if ($usuario == $user["usuario"] && $contra == $user["contra"]) {
        setcookie("USERNAME", $usuario, time() + 3600, "/");
        setcookie("NAMEUSER", $user["namedb"], time() + 3600, "/");
        $logueado = true;
        break;
    }
}

if ($logueado) {
    $_SESSION["colorpage"] = "red";
    header("Location: dashboard.php");
    exit();
} else {
    if (!$logueado) {
      echo "Usuario o contraseña incorrectos";
      die();
    }
}


?>