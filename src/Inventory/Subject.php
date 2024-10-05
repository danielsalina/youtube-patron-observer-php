<?php

// Sujeto (Subject): Es el objeto que tiene un estado y, cuando cambia, notifica a los observadores. Va a notificar a los observadores cuando cambie el estado (en este caso, el stock de un producto).

namespace Inventory;

use Observers\ObserverInterface;

class Subject {
    private array $observers = [];

    // Agregar observadores a la lista
    public function attach(ObserverInterface $observer): void {
        $this->observers[] = $observer;
    }

    // Eliminar observadores de la lista
    public function detach(ObserverInterface $observer): void {
        $this->observers = array_filter(
            $this->observers,
            fn($obs) => $obs !== $observer
        );
    }

    // Notificar a todos los observadores sobre un cambio
    protected function notify(string $productName, int $stock): void {
        foreach ($this->observers as $observer) {
            $observer->update($productName, $stock);
        }
    }
}
