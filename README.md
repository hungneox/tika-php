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

## Support APIs

- [ ] PUT /detect/stream
    - Produces: text/plain
- [x] GET /detectors
    - Produces: text/html
    - Produces: application/json
    - Produces: text/plain
- [ ] POST /language/stream
    - Produces: text/plain
- [ ] POST /language/string
    - Produces: text/plain
- [x] PUT /meta
    - Produces: text/csv
    - Produces: application/json
    - Produces: application/rdf+xml
- [ ] POST /meta/form
    - Produces: text/csv
    - Produces: application/json
    - Produces: application/rdf+xml
- [ ] PUT /meta/{field}
    - Produces: text/csv
    - Produces: application/json
    - Produces: application/rdf+xml
    - Produces: text/plain
- [x]  GET /mime-types
    - Produces: text/html
    - Produces: application/json
    - Produces: text/plain
- [x]  GET /parsers
    - Produces: text/html
- [x] GET /parsers
    - Produces: application/json
    - Produces: text/plain
- [ ] GET /parsers/details
    - Produces: text/html
    - Produces: application/json
    - Produces: text/plain
- [ ] POST /rmeta/form{handler : (\w+)?}
    - Produces: application/json
- [ ] PUT /rmeta/{handler : (\w+)?}
    - Produces: application/json
- [x] PUT /tika
    - Produces: text/html
    - Produces: text/plain
    - Produces: text/xml
- [ ] POST /tika/form
    - Produces: text/html
    - Produces: text/plain
    - Produces: text/xml
- [ ] POST /tika/form/main
    - Produces: text/plain
- [ ] PUT /tika/main
    - Produces: text/plain
- [ ] POST /translate/all/{translator}/{dest}
    - Produces: text/plain
- [ ] POST /translate/all/{translator}/{src}/{dest}
    - Produces: text/plain
- [ ] PUT /unpack/all{id:(/.*)?}
    - Produces: application/zip
    - Produces: application/x-tar
- [ ] PUT /unpack/{id:(/.*)?}
    - Produces: application/zip
    - Produces: application/x-tar
- [x] GET /version
    - Produces: text/plain
