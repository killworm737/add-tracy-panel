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

  require './vendor/autoload.php';
  
  \Tracy\Debugger::$showLocation = true; 
  \Tracy\Debugger::$editor = 'subl://open?url=file://%file&line=%line'; 
  $environment = \Tracy\Debugger::DEVELOPMENT;
  
  $bar = \Tracy\Debugger::getBar();
  $bar->addPanel(new AddPanel());  
  
  \Tracy\Debugger::enable($environment);
```