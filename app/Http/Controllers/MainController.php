<?php

namespace App\Http\Controllers;


use App\Figures\Square;
use App\Figures\Triangle;
use App\Helpers\Math;

class MainController extends Controller
{
	/**
	 * @function Getting a list of primer numbers , but always must be provided start number and how many numbers
	 *
	 * @param $startNumber
	 * @param $numberFigures
	 */
	public function getTriangle($startNumber = null, $numberFigures = null)
	{
		$figure = new Triangle();
		$this->getFinalFigure($figure, $startNumber, $numberFigures);
	}

	/**
	 * @function Getting a list of primer numbers , but always must be provided start number and how many numbers
	 *
	 * @param $startNumber
	 * @param $numberFigures
	 */
	public function getSquare($startNumber = null, $numberFigures = null)
	{
		$figure = new Square();
		$this->getFinalFigure($figure, $startNumber, $numberFigures);
	}

	private function getFinalFigure($obj, $startNumber = null, $numberFigures = null)
	{
		if (empty($startNumber)) {
			$startNumber = 5;
		}

		if (empty($numberFigures)) {
			$numberFigures = 3;
		}

		$rangeFigures = Math::getPrimeNumbers($startNumber, $numberFigures);
		$primeNumbers = Math::getPrimeNumbers(0, end($rangeFigures));

		for($i=0; $i<count($rangeFigures); $i++){
			$finalFigure = $obj->getFigure($rangeFigures[$i], $primeNumbers);
			$this->convertArrayToString($finalFigure);
		}
	}

	private function convertArrayToString($matrix){
		foreach($matrix as $key => $line){
			$printLine = implode("", $line);
			$printLine = str_replace(' ', '&nbsp;&nbsp;', $printLine);
			$printLine .= "<br />" . PHP_EOL;;
			print $printLine;
		}
	}
}
