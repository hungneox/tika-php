<?php

namespace Neox\Tika\Resources;

interface ResourceInterface
{
    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @param string $host
     *
     * @return string
     */
    public function getEndpoint(string $host): string;

    /**
     * @return array
     */
    public function getOptions(): array;
}
