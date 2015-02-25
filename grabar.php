<?php
	$operador=$_COOKIE["nombre"];
	$area=$_POST["area"];
	$usuario=$_POST["usuario"];
	$edificio=$_POST["edificio"];
	$ip=$_POST["ip"];
	$sistemaoperativo=$_POST["sistemaoperativo"];
	$cpu=$_POST["cpu"];
	$memoria=$_POST["memoria"];
	$hd=$_POST["hd"];
	$monitor=$_POST["monitor"];
	$impresora=$_POST["impresora"];
	$oficina=$_POST["oficina"]; 
	require("BD/BDEdificio.php");
	$subred=DevuelveSubRed($edificio,$subred);
	
	$ipcompleta=$subred.$ip;
	//echo ($ipcompleta);
	
	require("BD/BDEquipo.php");

	AgregarEquipo($operador,$area,$usuario,$edificio,$ipcompleta,$sistemaoperativo,$cpu,$memoria,$hd,$monitor,$impresora,$oficina);
?>