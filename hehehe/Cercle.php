<?php
    class Cercle 
    {
        private $centre;
        private $point;
        public $perimetre;
        public $surface;

        public function __construct($centre, $point) 
        {
            $this->centre = $centre;
            $this->point = $point;
            $this->perimetre = $this->calculerPerimetre();
            $this->surface = $this->calculerSurface();
        }

        private function distance($point1, $point2) 
        {
            return sqrt(pow($point2[0] - $point1[0], 2) + pow($point2[1] - $point1[1], 2));
        }

        private function calculerRayon() 
        {
            return $this->distance($this->centre, $this->point);
        }

        private function calculerPerimetre() 
        {
            $rayon = $this->calculerRayon();
            return 2 * pi() * $rayon; 
        }

        private function calculerSurface() 
        {
            $rayon = $this->calculerRayon();
            return pi() * pow($rayon, 2);
        }
    }
?>
