<?php

class ArraySet {
    private $items = [];
    private $count = 0;

    public function add($element) {
        if (!$this->contains($element)) {
            $this->items[$this->count++] = $element;
        }
    }

    public function contains($element) {
        return in_array($element, $this->items);
    }

    public function removeRandom() {
        if ($this->isEmpty()) {
            throw new Exception("Set is empty");
        }
        $key = array_rand($this->items);
        $removed = $this->items[$key];
        unset($this->items[$key]);
        $this->items = array_values($this->items); // Re-index
        $this->count--;
        return $removed;
    }

    public function isEmpty() {
        return $this->count === 0;
    }

    public function size() {
        return $this->count;
    }

    public function getIterator() {
        return new CustomArrayIterator($this->items);
    }

    public function __toString() {
        return implode("\n", $this->items);
    }
}
