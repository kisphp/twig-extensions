<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFilter;
use Kisphp\Twig\IsSafeHtml;

class DemoFilter extends AbstractTwigFilter
{
    use IsSafeHtml;

    protected function getFilterName()
    {
        return 'demo';
    }

    protected function getFilter()
    {
        return function ($name) {
            return $name;
        };
    }
}
