# add-tracy-panel
A panel for Tracy Debugger

## Installation

```
composer require killworm737/add-tracy-panel
```

OR

Update composer.json
```
{
    "require": {
        ...
        "killworm737/add-tracy-panel": "dev-master"
    },
}
```

Require this package with composer:

```
composer update
```

Use
-----------

```php
$bar = Tracy\Debugger::getBar();
$bar->addPanel(new add-tracy-panel());
```