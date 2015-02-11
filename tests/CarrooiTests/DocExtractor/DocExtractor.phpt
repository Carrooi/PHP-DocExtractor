<?php

/**
 * Test: Carrooi\DocExtractor\DocExtractor
 *
 * @testCase CarrooiTests\DocExtractor\DocExtractorTest
 * @author David Kudera
 */

namespace CarrooiTests\DocExtractor;

use Carrooi\DocExtractor\DocExtractor;
use Tester\Assert;
use Tester\TestCase;

require_once __DIR__ . '/../bootstrap.php';

/**
 *
 * @author David Kudera
 */
class DocExtractorTest extends TestCase
{


	/** @var \Carrooi\DocExtractor\DocExtractor */
	private $extractor;


	public function setUp()
	{
		$this->extractor = new DocExtractor;
	}


	public function tearDown()
	{
		$this->extractor = null;
	}


	public function testExtractText_fileNotExists()
	{
		Assert::exception(function() {
			$this->extractor->extractText(__DIR__. '/files/random.name.doc');
		}, 'Carrooi\DocExtractor\FileNotFoundException', 'Could not find file '. __DIR__. '/files/random.name.doc.');
	}


	public function testExtractText_unknownFileType()
	{
		Assert::exception(function() {
			$this->extractor->extractText(__DIR__. '/files/simple.txt');
		}, 'Carrooi\DocExtractor\ExtractorException', 'Could not extract text from '. __DIR__. '/files/simple.txt file.');
	}


	public function testExtractText()
	{
		$text = $this->extractor->extractText(__DIR__. '/files/simple.doc');

		Assert::contains('Recusandae quisque', $text);
	}

}


run(new DocExtractorTest);