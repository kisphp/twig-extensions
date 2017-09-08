<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFunction;
use Kisphp\Twig\IsSafeHtml;

class DemoFunctionSafeHtml extends AbstractTwigFunction
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

    public function getProvidedOptions()
    {
        return $this->getExtensionOptions();
    }
}
