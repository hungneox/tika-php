<?php

namespace Neox\Tika\Resources;

/**
 * Class Meta
 * @package Neox\Tika\Resources
 */
class Meta extends Resource
{
    /**
     * @inherit
     */
    protected $method = 'PUT';

    /**
     * @inherit
     */
    protected $endpoint = '/meta';

    /**
     * Meta constructor.
     *
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->buildOptions($filePath);
    }
}
