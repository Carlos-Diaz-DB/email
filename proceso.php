<?php

  $destino= $_POST['destino'];
  $asunto= $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

 

  mail($destino, $asunto, $mensaje);
?>