<?php
class Vod {

    protected static int $user = 0;

    protected array $film;
    protected int $tarif;



    public function __construct() {
        $this->tarif = 15;
        $this->film = ["Et si c'était vrai", "0007", "Raya et le Dernier Dragon", "Hula Fulla Dance","Pierre Lapin 2 : Panique en ville"];
    }

    public function getFilm() : array {
        return $this->film;
    }

    public function setFilm(string $film) {
        $this->film[] = $film;
        return $this;
    }

    public function getTarif() : string {
        return $this->tarif;
    }

    public function setTarif(string $tarif) {
        $this->tarif = $tarif;
    }

    public static function getUser() : int {
        return self::$user;
    }
    //add users
    public static function addUser() {
        self::$user++;
    }
}
