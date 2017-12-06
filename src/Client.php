<?php

namespace Neox\Tika;

use Neox\Tika\Resources\Language;
use Neox\Tika\Resources\MimeTypes;
use Neox\Tika\Resources\Parsers;
use Neox\Tika\Resources\Resource;
use Neox\Tika\Resources\RMeta;
use Neox\Tika\Resources\Tika;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Class Client
 * @package Neox\Tika
 */
class Client
{
    /**
     * @var string
     */
    protected $host;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var \GuzzleHttp\Client();
     */
    protected $httpClient;

    /**
     * Client constructor.
     *
     * @param $host
     * @param $port
     */
    public function __construct($host = null, $port = null, $httpClient = null)
    {
        $this->host       = $host;
        $this->port       = $port;
        $this->httpClient = $httpClient ?? new \GuzzleHttp\Client();
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port ?? 9998;
    }


    public function getHost(): string
    {
        return $this->host ?? 'http://localhost';
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->getHost() . ':' . $this->getPort();
    }

    /**
     * @param Resource $resource
     *
     * @return ResponseInterface
     */
    public function getResource(Resource $resource): ResponseInterface
    {
        return $this->httpClient->request(
            $resource->getMethod(),
            $resource->getEndpoint($this->getUri()),
            $resource->getOptions()
        );
    }

    /**
     * @param string $filePath
     *
     * @return StreamInterface
     */
    public function getText(string $filePath): StreamInterface
    {
        return $this->getResource(new Tika($filePath))->getBody();
    }

    /**
     * @param string $filePath
     *
     * @return StreamInterface
     */
    public function getHTML(string $filePath): StreamInterface
    {
        return $this->getResource(new Tika($filePath, 'text/html'))->getBody();
    }

    /**
     * @param string $filePath
     *
     * @return StreamInterface
     */
    public function getRecursiveMetadata(string $filePath): StreamInterface
    {
        return $this->getResource(new RMeta($filePath))->getBody();
    }

    /**
     * @param string $filePath
     *
     * @return StreamInterface
     */
    public function getLanguage(string $filePath): StreamInterface
    {
        return $this->getResource(new Language($filePath))->getBody();
    }

    /**
     * @return StreamInterface
     */
    public function getMimeTypes(): StreamInterface
    {
        return $this->getResource(new MimeTypes())->getBody();
    }

    /**
     * @return StreamInterface
     */
    public function getParsers(): StreamInterface
    {
        return $this->getResource(new Parsers())->getBody();
    }
}
