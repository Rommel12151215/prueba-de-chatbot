<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $consulta = $_POST["consulta"];
   $respuesta = "";

   if (strpos($consulta, "hola") !== false) {
     $respuesta = "¡Hola! ¿Cómo puedo ayudarte?";
   } else if (strpos($consulta, "adiós") !== false) {
     $respuesta = "¡Adiós! Que tengas un buen día.";
   } else {
     $respuesta = "Lo siento, no entiendo tu consulta.";
   }

   echo $respuesta;
 }
?>
