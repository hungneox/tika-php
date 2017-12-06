<?php

namespace Neox\Tika\Resources;

/**
 * Class Tika
 * @package Neox\Tika\Resources
 */
class Tika extends Resource
{
    /**
     * @inherit
     */
    protected $method = 'PUT';

    /**
     * @inherit
     */
    protected $endpoint = '/tika';

    /**
     * Tika constructor.
     *
     * @param string $filePath
     */
    public function __construct(string $filePath, string $outputFormat = 'text/plain')
    {
        $this->setOutputFormat($outputFormat);
        $this->buildOptions($filePath);
    }
}
