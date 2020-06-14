# random-integer-number
Example component for OXID eShop 6.2 Services

### Install as package
`composer require michaelkeiluweit/random-number`

### Example usage
```php
<?php

use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use MichaelKeiluweit\RandomNumber\RandomNumberInterface;

require_once 'bootstrap.php';

/** @var RandomIntegerNumberInterface $randomIntegerNumber */
$randomNumber = ContainerFactory::getInstance()->getContainer()->get(RandomNumberInterface::class);

$number = $randomNumber->shuffle();
echo 'random_number: ' . $number;
echo PHP_EOL;
echo 'type: ' . gettype($number);
echo PHP_EOL;

```
