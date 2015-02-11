<?php

namespace Carrooi\DocExtractor;

/**
 *
 * @author David Kudera
 */
class DocExtractor
{


	/**
	 * @param string $file
	 * @return string
	 */
	public function extractText($file)
	{
		if (!is_file($file) || !is_readable($file)) {
			throw new FileNotFoundException('Could not find file '. $file. '.');
		}

		if (strtolower(pathinfo($file, PATHINFO_EXTENSION)) !== 'doc') {
			throw new ExtractorException('Could not extract text from '. $file. ' file.');
		}

		exec("antiword $file 2>&1", $output, $return);

		if ($return === 0) {
			return implode("\n", $output);
		}

		throw new ExtractorException($output[0]);
	}

}
