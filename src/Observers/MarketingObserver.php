<?php

// Observador (Observer): Objetos que desean ser notificados cuando el sujeto cambia su estado.

namespace Observers;

class MarketingObserver implements ObserverInterface {
    public function update(string $productName, int $stock): void {
        echo "Marketing actualizado para el producto: $productName. Stock: $stock\n";
    }
}
