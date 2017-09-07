<?php

namespace Kisphp\Twig;

use \Twig_SimpleFunction as BaseExtension;

abstract class AbstractTwigFunction
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
