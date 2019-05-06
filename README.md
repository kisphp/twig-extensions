# Kisphp Twig Extensions

[![Build Status](https://travis-ci.org/kisphp/twig-extensions.svg?branch=master)](https://travis-ci.org/kisphp/twig-extensions)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/918d91ce791d4213b57f6429e33eb477)](https://www.codacy.com/app/mariusbogdan83/twig-extensions?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=kisphp/twig-extensions&amp;utm_campaign=Badge_Grade)

## Installation

```bash
composer require kisphp/twig-extensions
```

## Usage

### Create twig Filter

```php
<?php

namespace AppBundle\Twig\Filters;

use Kisphp\Twig\AbstractTwigFilter;

class DemoFilter extends AbstractTwigFilter
{
    /**
     * @return string
     */
    protected function getExtensionName()
    {
        return 'demo';
    }

    /**
     * @return \Closure
     */
    protected function getExtensionCallback()
    {
        return function ($name) {
            // add here your filter logic
        };
    }
}


```### Create twig Function

```php
<?php

namespace AppBundle\Twig\Functions;

use Kisphp\Twig\AbstractTwigFunction;

class DemoFunction extends AbstractTwigFunction
{
    /**
     * @return string
     */
    protected function getExtensionName()
    {
        return 'demo';
    }

    /**
     * @return \Closure
     */
    protected function getExtensionCallback()
    {
        return function ($name) {
            // add here your function logic
        };
    }
}

```

### Register new twig extensions

```php
<?php

namespace AppBundle\Twig;

use AppBundle\Twig\Functions\DemoFunction;
use AppBundle\Twig\Filters\DemoFilter;

class TwigExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return [
            DemoFunction::create(),
        ];
    }

    public function getFilters()
    {
        return [
            DemoFilter::create(),
        ];
    }
}
```

If your function of filter has dependencies then you can instantiate them like this:

```php
public function getFunctions()
{
    return [
        (new DemoFunction($myCustomDependency))->getExtension(),
    ];
}
```
