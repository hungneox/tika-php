<?php

namespace Neox\Tika\Resources;

/**
 * Class MimeTypes
 * @package Neox\Tika\Resources
 */
class MimeTypes extends Resource
{
    /**
     * @inherit
     */
    protected $method = 'GET';

    /**
     * @inherit
     */
    protected $endpoint = '/mime-types';
}
