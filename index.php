<?php

require 'vendor/autoload.php';

use Inventory\Product;
use Observers\BillingObserver;
use Observers\ShippingObserver;
use Observers\MarketingObserver;

// Crear un nuevo producto con stock inicial
$product = new Product('Laptop', 10);

// Crear observadores
$billing = new BillingObserver();
$shipping = new ShippingObserver();
$marketing = new MarketingObserver();

// Adjuntar observadores al producto
$product->attach($billing);
$product->attach($shipping);
$product->attach($marketing);

echo "Stock antes de actualizarlo {$product->getStock()} \n";

// Cambiar el stock del producto
echo "Actualizando stock del producto...\n";
$product->setStock(5); // Esto debería notificar a todos los observadores
