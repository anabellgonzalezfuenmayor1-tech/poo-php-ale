<?php

class Aprendiz
{
    protected string $nombre;
    protected string $documento;
    protected string $programa;

    public function __construct(
        string $nombre,
        string $documento,
        string $programa
    ) {
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->programa = $programa;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDocumento(): string
    {
        return $this->documento;
    }

    public function getPrograma(): string
    {
        return $this->programa;
    }
}