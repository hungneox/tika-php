<?php

namespace Neox\Tika\Tests;

use Neox\Tika\Client;
use Neox\Tika\Resources\Tika;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ClientTest
 * @package Neox\Tika\Tests
 */
class ClientTest extends TestCase
{
    /**
     * Test if default uri is generated properly
     */
    public function testGetDefaultUri()
    {
        $this->assertEquals('http://localhost:9998', (new Client())->getUri());
    }

    /**
     * Test if getResource method works properly
     */
    public function testGetResource()
    {

        $response = $this->getMockBuilder(ResponseInterface::class)->getMock();

        $httpClient = $this->getMockBuilder(\GuzzleHttp\Client::class)
                            ->setMethods(['request'])
                            ->getMock();

        $httpClient->expects($this->once())
                   ->method('request')
                   ->willReturn($response);

        $client = new Client('http://localhost', 9998, $httpClient);

        $tika = $this->getMockBuilder(Tika::class)
                     ->disableOriginalConstructor()
                     ->setMethods(['getMethod', 'getEndpoint', 'getOptions'])
                     ->getMock();

        $tika->expects($this->once())
             ->method('getMethod');

        $tika->expects($this->once())
             ->method('getEndpoint')
             ->with($client->getUri());

        $tika->expects($this->once())
             ->method('getOptions')
             ->willReturn([]);

        $client->getResource($tika);
    }
}
