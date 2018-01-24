class tiposervicio
{

private $idtiposervicio;
private $nombre;
private $descripcion;

function __construct($nombre, $descripcion){
$this->nombre=$nombre;
$this->=descripcion=$descripcion
}

function __construct($idtiposervicio,$nombre, $descripcion){
$this->nombre=$nombre;
$this->=descripcion=$descripcion;
$this->=idtiposervicio=$idtipservicio;
}

function setIdtiposervicio($idtiposervicio){
$this->idtiposervicio=$idtiposervicio;
}

function getIdtiposervicio(){
return $this->idtiposervicio;
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




