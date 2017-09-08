<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFunction;
use Kisphp\Twig\IsSafeHtml;

class DemoFunctionSafeHtml extends AbstractTwigFunction
{
    use IsSafeHtml;

    /**
     * @return array
     */
    public function getProvidedOptions()
    {
        return $this->getExtensionOptions();
    }

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
