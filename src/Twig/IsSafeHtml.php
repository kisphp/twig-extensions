<?php

namespace Kisphp\Twig;

trait IsSafeHtml
{
    /**
     * @return array
     */
    protected function getOptions()
    {
        return [
            'is_safe' => ['html'],
        ];
    }
}
