<?php

namespace App\Figures;

use App\Exceptions\InvalidNumberFigures;
use App\Exceptions\InvalidStartNumber;
use App\Helpers\Math;

abstract class Figure
{
	/**
	 * @function Creating figure based on description from a documentation
	 *
	 * @param $lines
	 * @param $primeNumbers
	 * @return array
	 */
	public abstract function getFigure($lines, $primeNumbers = null) : array;

	/**
	 * @function Creating figure based on description from a documentation
	 *
	 * @param $startNumber
	 * @param $numberFigures
	 * @return array
	 *
	 * @throws InvalidStartNumber
	 * @throws InvalidNumberFigures
	 */
	public function getFinalFigure($startNumber = null, $numberFigures = null)
	{
		if (empty($startNumber)) {
			$startNumber = 5;
		}

		if ((!is_numeric($startNumber) && !is_null($startNumber)) || ($startNumber < 0)) {
			throw new InvalidStartNumber();
		}

		if (empty($numberFigures)) {
			$numberFigures = 3;
		}

		if ((!is_numeric($numberFigures) && !is_null($numberFigures)) || ($numberFigures < 0)) {
			throw new InvalidNumberFigures();
		}

		$rangeFigures = Math::getPrimeNumbers($startNumber, $numberFigures);
		$primeNumbers = Math::getPrimeNumbers(0, end($rangeFigures));

		$allFigures = [];
		for($i=0; $i<count($rangeFigures); $i++){
			$allFigures[] = $this->getFigure($rangeFigures[$i], $primeNumbers);
		}

		return $allFigures;
	}

}
