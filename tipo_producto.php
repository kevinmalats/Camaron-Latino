class tipoproducto
{

private $idtipoproducto;
private $nombre;
private $descripcion;

function __construct($nombre, $descripcion){
$this->nombre=$nombre;
$this->=descripcion=$descripcion
}

function __construct($idtipoproducto,$nombre, $descripcion){
$this->nombre=$nombre;
$this->=descripcion=$descripcion;
$this->=idtipoproducto=$idtipoproducto;
}

function setIdtipoproducto($idtipoproducto){
$this->idtipoproducto=$idtipoproducto;
}

function getIdtipoproducto(){
return $this->idtipoproducto;
}

function setnombre($nombre){
$this->nombre=$nombre;
}

function getnombre(){
return $this->nombre;
}

function setdescripcion($descripcion){
$this->descripcion=$descripcion;
}

function getdescripcion(){
return $this->descripcion;
}




