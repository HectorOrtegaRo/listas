<?php

interface SetADT {
    public function add($element);
    public function removeRandom();
    public function contains($element);
    public function isEmpty();
    public function size();
    public function getIterator();
}
