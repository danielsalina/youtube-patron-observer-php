<?php

// Interfaz común para todos los observadores. Esos observadores reaccionarán cuando el inventario cambie.
namespace Observers;

interface ObserverInterface {
    public function update(string $productName, int $stock);
}
