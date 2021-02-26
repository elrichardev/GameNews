<?php

session_start();
if(session_destroy()) // Cerrando la sesion
{
header("Location: index.html"); // Redirige a ...
}
?>