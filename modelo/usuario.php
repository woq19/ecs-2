<?php

class Usuario
{

    public $Id;
    public $NombreUsuario;
    public $Clave;
    public $Email;
    public $Nombre;
    public $Apellido;
    public $FechaNacimiento;
    public $NroDocumento;
    public $FechaAlta;

    public function MostrarDatos()
    {

        echo 'Id: '. $this->Id. '<br>';
        echo 'Nombre de usuario: '. $this->NombreUsuario. '<br>';
        echo 'Clave: '. $this->Clave. '<br>';
        echo 'E-mail: '. $this->Email. '<br>';
        echo 'Nombre: '. $this->Nombre. '<br>';
        echo 'Apellido: '. $this->Apellido. '<br>';
        echo 'Fecha de nacimiento: '. $this->FechaNacimiento. '<br>';
        echo 'Numero de documento: '. $this->NroDocumento. '<br>';
        echo 'Fecha de alta: '. $this->FechaAlta. '<br>';
        

    }

}