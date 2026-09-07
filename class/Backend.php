<?php 
class Backend extends Aprendiz implements Reporte{
    private $especialidad = "Backend";
    private $lenguajes;


    public function __construct(
        string $nombre,
        string $documento,
        string $programa,
        string $lenguajes
    ){
        parent::__construct($nombre, $documento, $programa);
        $this->lenguajes = $lenguajes;
    }

    public function GetEspecialidad(): string{
        return $this->especialidad;
    }

    public function GenerarReporte(): string{
        return 
        <<<REPORT
        Reporte de Backend: Nombre: {$this->nombre}, 
        Documento: {$this->documento}, Programa: {$this->programa}, 
        Lenguajes: {$this->lenguajes} 
        REPORT; 
        ;
    }
}

?>