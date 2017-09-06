<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\Extensions\AbstractTwigFilter;
use Kisphp\Twig\IsSafeHtml;

class DemoFilter extends AbstractTwigFilter
{
    use IsSafeHtml;

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
