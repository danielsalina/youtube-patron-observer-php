<?php

// Observador (Observer): Objetos que desean ser notificados cuando el sujeto cambia su estado.

namespace Observers;

class BillingObserver implements ObserverInterface {
    public function update(string $productName, int $stock): void {
        echo "Facturación actualizada para el producto: $productName. Stock: $stock\n";
    }
}
