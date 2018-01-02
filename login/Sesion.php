<?php

class Sesion
{

  private $nickname;
  private $password;
  private $descripcion;

  function __construct($nickname, $password,$descripcion)
  {

    $this->nickname = $nickname;
    $this->password = $password;
    $this->descripcion = $descripcion;
  }


  function setnickname($nickname)
  {
    $this->nickname = $nickname;
  }

  function getnickname()
  {
    return $this->nickname;
  }

  function setpassword($password)
  {
    $this->password = $password;
  }

  function getpassword()
  {
    return $this->password;
  }
  function setdescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  function getdescripcion()
  {
    return $this->descripcion;
  }
}

?>