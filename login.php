<?php
  //setcookie("nombre",$_POST["usuario"]);
  $usuario=$_POST["usuario"];
  $clave=$_POST["clave"];
  $sistema=$_POST["sistemas"];
  //echo ("USUARIO ".$usuario."<br>"."CLAVE ".$clave." <br> sistema".$sistema);
  require "BD/BDUsuario.php";
  logeo($usuario,$clave,$result,$nomyap);
  setcookie("nombre",$nomyap);
  //echo("Resultado ".$result);
  if ($result=="false") {
  	require("nologin.html");
  } else {
  	setcookie("nombre",$nomyap);
  	require("alta.php");
  }
?>