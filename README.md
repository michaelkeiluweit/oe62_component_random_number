# random-number
Example component service for OXID eShop 6.2

### Install as package
`composer require michaelkeiluweit/random-number`

### Example usage
```php
<?php

use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use MichaelKeiluweit\RandomNumber\RandomNumberInterface;

require_once 'bootstrap.php';

/** @var RandomNumberInterface $randomNumber */
$randomNumber = ContainerFactory::getInstance()->getContainer()->get(RandomNumberInterface::class);

$number = $randomNumber->shuffle();
echo PHP_EOL;
echo 'random number: ' . $number . PHP_EOL;
echo 'number type: ' . gettype($number) . PHP_EOL;
echo 'object type: ' . get_class($randomNumber) . PHP_EOL . PHP_EOL;
```

### Switch from integer to float

To get a random float number, open the file `random-number/src/services.yaml` and replace the line
```yaml
class: MichaelKeiluweit\RandomNumber\RandomIntegerNumber
```
with
```yaml
class: MichaelKeiluweit\RandomNumber\RandomFloatNumber
```

After that, execute the command `composer update`.
Now the service will provide a random float number.


