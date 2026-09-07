<?php 
class Frontend extends Aprendiz{
    private $especialidad = "Frontend";
    private $herramientas;


    public function __construct(
        string $nombre,
        string $documento,
        string $programa,
        string $herramientas
    ){
        parent::__construct($nombre, $documento, $programa);
        $this->herramientas = $herramientas;
    }

    public function GetEspecialidad(): string{
        return $this->especialidad;
    }

    public function GenerarReporte(): string{
        return 
        <<<REPORT
        Reporte de Frontend: Nombre: {$this->nombre}, 
        Documento: {$this->documento}, Programa: {$this->programa}, 
        Lenguajes: {$this->herramientas} 
        REPORT; 
        ;
    }
}

?>