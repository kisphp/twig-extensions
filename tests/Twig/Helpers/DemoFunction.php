<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFunction;
use Kisphp\Twig\IsSafeHtml;

class DemoFunction extends AbstractTwigFunction
{
    use IsSafeHtml;

    protected function getFunctionName()
    {
        return 'demo';
    }

    protected function getFunction()
    {
        return function ($name) {
            return $name;
        };
    }
}
