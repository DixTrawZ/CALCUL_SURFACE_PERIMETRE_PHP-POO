<?php
    class Triangle 
    {
        private $p1;
        private $p2;
        private $p3;
        public $perimetre;
        public $surface;

        public function __construct($p1, $p2, $p3) 
        {
            $this->p1 = $p1;
            $this->p2 = $p2;
            $this->p3 = $p3;
            $this->perimetre = $this->calculerPerimetre();
            $this->surface = $this->calculerSurface();
        }

        private function distance($point1, $point2) 
        {
            return sqrt(pow($point2[0] - $point1[0], 2) + pow($point2[1] - $point1[1], 2));
        }

        private function calculerPerimetre() 
        {
            $AB = $this->distance($this->p1, $this->p2);
            $BC = $this->distance($this->p2, $this->p3);
            $CA = $this->distance($this->p3, $this->p1);
            return $AB + $BC + $CA;
        }

        private function calculerSurface() 
        {
            $AB = $this->distance($this->p1, $this->p2);
            $BC = $this->distance($this->p2, $this->p3);
            $CA = $this->distance($this->p3, $this->p1);
            $semiPerimetre = $this->perimetre / 2;
            return sqrt($semiPerimetre * ($semiPerimetre - $AB) * ($semiPerimetre - $BC) * ($semiPerimetre - $CA));
        }
    }
?>
