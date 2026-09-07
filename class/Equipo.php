<?php
class Equipo
{
    private array $aprendices = [];


    public function AgregarAprendiz(Aprendiz $aprendiz)
    {
        $this->aprendices[] = $aprendiz;
    }
    public function MostrarAprendices(): string
    {
        $reporte = "";
        foreach ($this->aprendices as $aprendiz) {
            $reporte .= $aprendiz->GenerarReporte() . "\n";
        }
        return $reporte;
    }
    public function ContarAPrendices(): int
    {
        return count($this->aprendices);
    }
    public function AprendicesPorEspecialidad(string $especialidad): array
    {
        $aprendicesEspecialidad = [];
        foreach ($this->aprendices as $aprendiz) {
            if ($aprendiz->GetEspecialidad() === $especialidad) {
                $aprendicesEspecialidad[] = $aprendiz;
            }
        }
        return $aprendicesEspecialidad;
    }
    public function ContarAprendicesPorEspecialidad(): string
    {

        $aprendicesEspecialidad = [];
        $aprendicesEspecialidad = $this->AprendicesPorEspecialidad("Backend");
        $ap_band = count($aprendicesEspecialidad);
        $aprendicesEspecialidad = $this->AprendicesPorEspecialidad("Frontend");
        $ap_fron = count($aprendicesEspecialidad);

        return 
        $ap_band > $ap_fron ? "Hay más aprendices de Backend" : 
        ($ap_band < $ap_fron ? "Hay más aprendices de Frontend" : 
        "Hay la misma cantidad de aprendices de Backend y Frontend");
    }


}

?>