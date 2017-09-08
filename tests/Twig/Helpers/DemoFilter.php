<?php

namespace tests\Twig\Helpers;

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
            return $name;
        };
    }
}
