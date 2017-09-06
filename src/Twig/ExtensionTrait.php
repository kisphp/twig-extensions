<?php

namespace Kisphp\Twig;

trait ExtensionTrait
{
    /**
     * @var \Twig_SimpleFunction
     */
    protected $extension;

    /**
     * @return \Twig_SimpleFunction
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @return \Twig_SimpleFunction
     */
    public static function create()
    {
        $extension = new static();

        return $extension->getExtension();
    }

    /**
     * @return string
     */
    abstract protected function getExtensionName();

    /**
     * @return Callable
     */
    abstract protected function getExtensionCallback();

    /**
     * @return array
     */
    protected function getExtensionOptions()
    {
        return [];
    }
}