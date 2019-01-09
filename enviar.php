<?php
 $destino="williamaguero962@gmail.com";
 $nombre=$_POST["nombre"];
 $correo=$_POST["correo"];
  $Teléfono=$_POST["telefono"];
 $mensaje=$_POST["mensaje"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location: gracias.html");
?>