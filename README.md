# Tika PHP

[![Build Status](https://travis-ci.org/hungneox/tika-php.svg?branch=master)](https://travis-ci.org/hungneox/tika-php)
[![Coverage Status](https://coveralls.io/repos/github/hungneox/lumen-messenger-sdk/badge.svg?branch=master)](https://coveralls.io/github/hungneox/lumen-messenger-sdk?branch=master)
[![StyleCI](https://styleci.io/repos/114259544/shield?style=flat)](https://styleci.io/repos/114259544)

A PHP client for [Apache Tika](https://tika.apache.org/)

## Requirement

- [Apache Tika JAX-RS Server](https://github.com/apache/tika/tree/master/tika-server)
- PHP 7.0 or newer

## Usage

### Installation

Run the following command to install the package through Composer:

```
composer require hungneox/tika-php
```

### Extract metadata from media file

```php
$client = new \Neox\Tika\Client('localhost', 9998);
$response = $client->getMeta(realpath('sample.pdf'));
echo $response;
```

### Sample output

```
"pdf:PDFVersion","1.3"
"pdf:docinfo:title","LASKU"
"xmp:CreatorTool","DNA Oyj"
"access_permission:modify_annotations","true"
"access_permission:can_print_degraded","true"
"subject","11711235932"
"dc:creator","DNA Oyj"
"language","fi"
"dc:format","application/pdf; version=1.3"
"title","LASKU"
"pdf:docinfo:creator_tool","DNA Oyj"
"access_permission:fill_in_form","true"
"pdf:encrypted","false"
"dc:title","LASKU"
"cp:subject","11711235932"
"pdf:docinfo:subject","11711235932"
"Content-Type","application/pdf"
"pdf:docinfo:creator","DNA Oyj"
"X-Parsed-By","org.apache.tika.parser.DefaultParser","org.apache.tika.parser.pdf.PDFParser"
"creator","DNA Oyj"
"meta:author","DNA Oyj"
"access_permission:extract_for_accessibility","true"
"access_permission:assemble_document","true"
"xmpTPg:NPages","2"
"access_permission:extract_content","true"
"access_permission:can_print","true"
"Author","DNA Oyj"
"producer","Qvantel Business Solutions Oy - PDF Generator (revolver)"
"access_permission:can_modify","true"
"pdf:docinfo:producer","Qvantel Business Solutions Oy - PDF Generator (revolver)"
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
