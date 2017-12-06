<?php

namespace Neox\Tika\Resources;

/**
 * Class Version
 * @package Neox\Tika\Resources
 */
class Version extends Resource
{
    /**
     * @inherit
     */
    protected $method = 'GET';

    /**
     * @inherit
     */
    protected $endpoint = '/version';
}
