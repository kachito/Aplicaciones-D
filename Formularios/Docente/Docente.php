<?php

class Docente
{
  private $cedula;
  private $nombre;
  private $apellido;
  private $telefono;
  private $curso;
  private $email1;
  private $email2;
  private $representante;
  private $usuario;


  function __construct($cedula, $nombre, $apellido, $telefono, $curso, $email1, $email2,$representante, $usuario)
  {
    $this->cedula = $cedula;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->telefono = $telefono;
    $this->curso = $curso;
    $this->email1 = $email1;
    $this->email2 = $email2;
    $this->representante = $representante;
    $this->usuario = $usuario;


  }

  function setcedula($cedula)
  {
    $this->cedula = $cedula;
  }

  function getcedula()
  {
    return $this->cedula;
  }
  function setnombre($nombre)
  {
    $this->nombre = $nombre;
  }

  function getnombre()
  {
    return $this->nombre;
  }

  function setapellido($apellido)
  {
    $this->apellido = $apellido;
  }

  function getapellido()
  {
    return $this->apellido;
  }

  function settelefono($telefono)
  {
    $this->telefono = $telefono;
  }

  function gettelefono()
  {
    return $this->telefono;
  }

  function setcurso($curso)
  {
    $this->curso = $curso;
  }

  function getcurso()
  {
    return $this->curso;
  }


  function setemail1($email1)
  {
    $this->email1 = $email1;
  }

  function getemail1()
  {
    return $this->email1;
  }

  function setemail2($email2)
  {
    $this->email2 = $email2;
  }

  function getemail2()
  {
    return $this->email2;
  }
  function setrepresentante($representante)
  {
    $this->representante = $representante;
  }

  function getrepresentante()
  {
    return $this->representante;
  }

  function setusuario($usuario)
  {
    $this->usuario = $usuario;
  }

  function getusuario()
  {
    return $this->usuario;
  }


}

?> 
