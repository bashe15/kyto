<?php

namespace App\Figures;


interface Figure
{
	/**
	 * @function Creating figure based on description from a documentation
	 *
	 * @param $lines
	 * @param $primeNumbers
	 * @return array
	 */
	public function getFigure($lines, $primeNumbers = null) : array;
}
