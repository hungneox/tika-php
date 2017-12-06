<?php

namespace Neox\Tika\Resources;

/**
 * Class Language
 * @package Neox\Tika\Resources
 */
class Language extends Resource
{
    /**
     * @inherit
     */
    protected $method = 'PUT';

    /**
     * @inherit
     */
    protected $endpoint = '/language/stream';

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
