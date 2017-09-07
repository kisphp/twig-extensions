<?php

namespace Kisphp\Twig;

trait IsSafeHtml
{
    /**
     * @return array
     */
    protected function getExtensionOptions()
    {
        return [
            'is_safe' => ['html'],
        ];
    }
}
