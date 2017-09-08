<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFunction;
use Kisphp\Twig\IsSafeHtml;

class DemoFunctionSafeHtml extends AbstractTwigFunction
{
    use IsSafeHtml;

    public function getProvidedOptions()
    {
        return $this->getExtensionOptions();
    }

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
