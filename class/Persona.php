<?php 
class Persona {
    private $nombre;
    private $documento;

    public function __construct(
        string $nombre,
        string $documento
    ){
        $this->nombre = $nombre;
        $this->documento = $documento;
    }

    public function __get($name){
        return $this->$name;
    }
}

?>