# Tika PHP

A PHP client for [Apache Tika](https://tika.apache.org/)

## Requirement

- [Apache Tika JAX-RS Server](https://github.com/apache/tika/tree/master/tika-server)
- PHP 7.0 or newer


## Usage


```php
$client = new \Neox\Tika\Client('localhost', 9998);
$response = $client->getRecursiveMetadata(realpath('sample.pdf'));
echo $response;
```
