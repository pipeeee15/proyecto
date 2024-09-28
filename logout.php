<?php
// Eliminar cookies
setcookie("USERNAME", "", time() - 3600, "/");  // Elimina la cookie
setcookie("NAMEUSER", "", time() - 3600, "/"); // Elimina la cookie

header("Location: ./");
exit();
?>
