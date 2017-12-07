<?php

namespace Neox\Tika\Resources;

/**
 * Class Resource
 * @package Neox\Tika\Resources
 */
abstract class Resource implements ResourceInterface
{
    /**
     * @var string
     */
    protected $method;


    /**
     * @var string
     */
    protected $endpoint;


    /**
     * @var array
     */
    protected $options;

    /**
     * @var string
     */
    protected $outputFormat;

    /**
     * @return string
     */
    public function getOutputFormat(): string
    {
        return $this->outputFormat;
    }

    /**
     * @param string $outputFormat
     *
     * @return $this
     */
    public function setOutputFormat(string $outputFormat)
    {
        $this->outputFormat = $outputFormat;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }


    /**
     * @return string
     */
    public function getEndpoint(string $host): string
    {
        return $host . $this->endpoint;
    }


    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options ?? [];
    }

    /**
     * @param string $filePath
     */
    protected function buildOptions(string $filePath)
    {
        $options = [
            'multipart' => [
                [
                    'name'     => 'upload',
                    'contents' => file_get_contents($filePath),
                    'filename' => $filePath
                ]
            ],
            'headers'   => [
                'Content-type' => mime_content_type($filePath)
            ]
        ];

        if (!empty($this->outputFormat)) {
            $options['headers']['Accept'] = $this->outputFormat;
        }

        $this->options = $options;
    }
}
