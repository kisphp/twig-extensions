<?php

namespace Kisphp\Twig;

use Twig\TwigFunction as TwigExtension;

abstract class AbstractTwigFunction
{
    use ExtensionTrait;

    public function __construct()
    {
        $this->extension = new TwigExtension(
            $this->getExtensionName(),
            $this->getExtensionCallback(),
            $this->getExtensionOptions()
        );
    }
}
