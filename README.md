# random-integer-number
Example component for OXID eShop 6.2 Services

### Install as package
`composer require michaelkeiluweit/random-integer-number`

### Example usage
```php
<?php

use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use MichaelKeiluweit\RandomIntegerNumber\RandomIntegerNumberInterface;

require_once 'bootstrap.php';

/** @var RandomIntegerNumberInterface $randomIntegerNumber */
$randomIntegerNumber = ContainerFactory::getInstance()->getContainer()->get(RandomIntegerNumberInterface::class);

echo 'random_number: ' . $randomIntegerNumber->shuffle();
echo PHP_EOL;

```
