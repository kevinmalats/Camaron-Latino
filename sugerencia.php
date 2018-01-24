class sugerencia
{

private $idsugerencia;
private $nombre;
private $fecha;
private $correo;
private $telefono;
private $mensaje;

function __construct($nombre, $fecha, $correo, $telefono, $mensaje){
$this->nombre=$nombre;
$this->=fecha=$fecha;
$this->=correo=$correo;
$this->=telefono=$telefono;
$this->=mensaje=$mensaje;
}

function __construct($idsugerencia,$nombre, $fecha, $correo, $telefono, $mensaje){
$this->sugerencia=$sugerencia;
$this->nombre=$nombre;
$this->=fecha=$fecha;
$this->=correo=$correo;
$this->=telefono=$telefono;
$this->=mensaje=$mensaje;
}

function setsugerencia($idsugerencia){
$this->idsugerencia=$idsugerencia;
}

function getsugerencia(){
return $this->idsugerencia;
}

function setnombre($nombre){
$this->nombre=$nombre;
}

function getnombre(){
return $this->nombre;
}

function setfecha($fecha){
$this->fecha=$fecha;
}

function getfecha(){
return $this->fecha;
}

function setcorreo($correo){
$this->correo=$correo;
}

function getcorreo(){
return $this->correo;
}


function settelefono($telefono){
$this->telefono=$telefono;
}

function gettelefono(){
return $this->telefono;
}



function setmensaje($mensaje){
$this->mensaje=$mensaje;
}

function getmensaje(){
return $this->mensaje;
}




