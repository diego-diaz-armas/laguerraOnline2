<?php

require_once('Mazo.php');

class Jugador
{
    private int $cantVidas;
    private string $nombre;
    private Mazo $mazo;
    private int $rondasGanadas;
    private int $idJugador;

    public function __construct(string $nombre, int $cantVidas,int $idJugador)
    {
        $this->nombre = $nombre;
        $this->cantVidas = $cantVidas;
        $this->mazo = new Mazo($idJugador);
        $this->rondasGanadas = 0; // Inicializamos las rondas ganadas a cero SIEMPRE
        $this->idJugador = $idJugador;
    }

     // Método para obtener el ID del jugador
    public function getId(): int
    {
        return $this->idJugador;
    }

    public function getVidas(): int
    {
        return $this->cantVidas;
    }

    public function setVidas(int $value): void
    {
        $this->cantVidas = $this->cantVidas - $value;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getMazo(): Mazo
    {
        return $this->mazo;
    }

    public function getCartaMazoAleatoria(): Carta
    {
        return $this->mazo->getCartaAleatoria();
    }

    public function quedanCartas(): bool
    {
        return $this->mazo->contarCartasMazo() > 0;
    }

    public function ganarRonda(): void
    {
        $this->rondasGanadas++;
    }

    public function cartasEnMazo(): int {
        return count($this->mazo->getMazo());
    }

    public function getRondasGanadas(): int
    {
        return $this->rondasGanadas;
    }

    public function reducirVidas(): void {
        $this->cantVidas--;
    }
    

    public function __toString(): string
    {
        return "Nombre: " . $this->nombre . 
                ", Vidas: " . $this->cantVidas . 
                ", Rondas ganadas: " . $this->rondasGanadas . 
                ", Cartas en el mazo: " . $this->mazo->contarCartasMazo();
    }
}
?>