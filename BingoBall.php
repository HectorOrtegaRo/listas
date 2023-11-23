<?php

class BingoBall {
    private $letter;
    private $number;

    public function __construct($number) {
        $this->number = $number;
        if ($number <= 15) {
            $this->letter = 'B';
        } elseif ($number <= 30) {
            $this->letter = 'I';
        } elseif ($number <= 45) {
            $this->letter = 'N';
        } elseif ($number <= 60) {
            $this->letter = 'G';
        } else {
            $this->letter = 'O';
        }
    }

    public function __toString() {
        return $this->letter . "-" . $this->number;
    }
}
