<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFilter;

class DemoFilter extends AbstractTwigFilter
{
    protected function getExtensionName()
    {
        return 'demo';
    }

    protected function getExtensionCallback()
    {
        return function ($name) {
            return $name;
        };
    }
}
