<?php

// Observador (Observer): Objetos que desean ser notificados cuando el sujeto cambia su estado.

namespace Observers;

class ShippingObserver implements ObserverInterface {
    public function update(string $productName, int $stock): void {
        echo "Envío actualizado para el producto: $productName. Stock: $stock\n";
    }
}
