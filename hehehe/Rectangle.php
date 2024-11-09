<?php
    class Rectangle 
    {
        private $p1;
        private $p2;
        private $p3;
        private $p4;
        public $perimetre;
        public $surface;

        public function __construct($p1, $p2, $p3, $p4) 
        {
            $this->p1 = $p1;
            $this->p2 = $p2;
            $this->p3 = $p3;
            $this->p4 = $p4;
            $this->perimetre = $this->calculerPerimetre();
            $this->surface = $this->calculerSurface();
        }

        private function distance($point1, $point2) 
        {
            return sqrt(pow($point2[0] - $point1[0], 2) + pow($point2[1] - $point1[1], 2));
        }

        private function calculerLongueur() 
        {
            return $this->distance($this->p1, $this->p2);
        }

        private function calculerLargeur() 
        {
            return $this->distance($this->p2, $this->p3);
        }

        private function calculerPerimetre() 
        {
            $longueur = $this->calculerLongueur();
            $largeur = $this->calculerLargeur();
            return 2 * ($longueur + $largeur);
        }

        private function calculerSurface() 
        {
            $longueur = $this->calculerLongueur();
            $largeur = $this->calculerLargeur();
            return $longueur * $largeur;
        }
    }
?>
