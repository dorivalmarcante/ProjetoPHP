<?php
class Calculadora {
    public $total = 0;

    public function add($value) {
        $this->total += $value;
    }

    public function sub($value) {
        $this->total -= $value;
    }

    public function divide($value) {
        $this->total /= $value;
    }

    public function multiply($value) {
        $this->total *= $value;
    }

    public function total() {
        return $this->total;
    }
    
    public function clear() {
        $this->total=0;
    }
}