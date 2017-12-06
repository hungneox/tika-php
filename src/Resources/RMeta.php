<?php

namespace Neox\Tika\Resources;

/**
 * Class RMeta
 * @package Neox\Tika\Resources
 */
class RMeta extends Resource
{
    /**
     * @inherit
     */
    protected $method = 'PUT';

    /**
     * @inherit
     */
    protected $endpoint = '/rmeta';

    /**
     * Language constructor.
     *
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->buildOptions($filePath);
    }
}
