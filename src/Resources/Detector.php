<?php

namespace Neox\Tika\Resources;

/**
 * Class Detector
 * @package Neox\Tika\Resources
 */
class Detector extends Resource
{
    /**
     * @inherit
     */
    protected $method = 'GET';

    /**
     * @inherit
     */
    protected $endpoint = '/detectors';
}
