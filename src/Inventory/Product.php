<?php

// Cuando el stock de un producto cambia, debe notificar a los observadores.

namespace Inventory;

class Product extends Subject {
    private int $stock;

    public function __construct(private string $name, private int $initialStock) {
        $this->stock = $initialStock;
    }

    // Cambiar el stock del producto y notificar a los observadores
    public function setStock(int $stock): void {
        $this->stock = $stock;
        $this->notify($this->name, $this->stock);
    }

    public function getStock(): int {
        return $this->stock;
    }
}
