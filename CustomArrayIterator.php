<?php

class CustomArrayIterator implements Iterator {
    private $items;
    private $current = 0;

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function current() {
        return $this->items[$this->current];
    }

    public function key() {
        return $this->current;
    }

    public function next(): void {
        ++$this->current;
    }

    public function rewind(): void {
        $this->current = 0;
    }

    public function valid(): bool {
        return isset($this->items[$this->current]);
    }
}

