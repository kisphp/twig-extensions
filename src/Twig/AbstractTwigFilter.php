<?php

namespace Kisphp\Twig;

abstract class AbstractTwigFilter
{
    /**
     * @var \Twig_Filter
     */
    private $twigFilter;

    /**
     * @return \Twig_Filter
     */
    public function getTwigFilter()
    {
        return $this->twigFilter;
    }

    public function __construct()
    {
        $this->twigFilter = new \Twig_Filter(
            $this->getFilterName(),
            $this->getFilter(),
            $this->getOptions()
        );
    }

    /**
     * @return \Twig_Filter
     */
    public static function create()
    {
        $filter = new static();

        return $filter->getTwigFilter();
    }

    /**
     * @return string
     */
    abstract protected function getFilterName();

    /**
     * @return Callable
     */
    abstract protected function getFilter();

    /**
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }
}
