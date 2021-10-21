<?php 

private $nombre;
private $codigo;
private $pvp;
private $nombre_corto;

function __construct($lista){
    $this->$nombre=$lista['nombre'];
    $this->$codigo=$lista['codigo'];
    $this->$pvp=$lista['pvp'];
    $this->$nombre_corto=$lista['nombre_corto'];
}

public getNombre(){return $nombre;}
public getCodigo(){return $codigo;}
public getPvp(){return $pvp;}
public getNombre_corto(){return $nombre_corto;}

public mostrar(){
    return $nombre . " " . $pvp;
}
?>