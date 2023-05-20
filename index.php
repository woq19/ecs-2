<?php

require_once 'modelo/usuario.php';

$p = new Usuario();

$p->Id = 10;
$p->NombreUsuario = 'WOQ';
$p->Clave = 123456;
$p->Email = 'walteroscarquintana@gmail.com';
$p->Nombre = 'Walter';
$p->Apellido = 'Quintana';
$p->FechaNacimiento = '19/05/1996';
$p->NroDocumento = 39663133;
$p->FechaAlta = '15-05-22';

$p->MostrarDatos();