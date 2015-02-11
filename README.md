# Carrooi/DocExtractor

[![Build Status](https://img.shields.io/travis/Carrooi/PHP-DocExtractor.svg?style=flat-square)](https://travis-ci.org/Carrooi/PHP-DocExtractor)
[![Donate](https://img.shields.io/badge/donate-PayPal-brightgreen.svg?style=flat-square)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=W434LKYQTTQG6)

DOC text extractor.

Depends on antiword.

## Installation

```
$ composer require carrooi/doc-extractor
$ composer update
```

## Usage

```php
use Carrooi\DocExtractor\DocExtractor;

$extractor = new DocExtractor;

$text = $extractor->extractText('/path/to/file.doc');
```

## Changelog

* 1.0.0
	+ Initial version
