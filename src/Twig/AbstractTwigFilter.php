<?php

namespace Kisphp\Twig;

use \Twig_SimpleFilter as BaseExtension;

abstract class AbstractTwigFilter
{
    use ExtensionTrait;

    public function __construct()
    {
        $this->extension = new BaseExtension(
            $this->getExtensionName(),
            $this->getExtensionCallback(),
            $this->getExtensionOptions()
        );
    }
}
