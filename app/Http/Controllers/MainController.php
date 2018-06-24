<?php

namespace App\Http\Controllers;

use App\Figures\Square;
use App\Figures\Triangle;

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
		$allFigures = $figure->getFinalFigure($startNumber, $numberFigures);

		foreach ($allFigures as $figure) {
			$this->convertArrayToString($figure);
		}
	}

	/**
	 * Connection to the Square and getting all the figures ready for printing
	 *
	 * @param $startNumber
	 * @param $numberFigures
	 */
	public function getSquare($startNumber = null, $numberFigures = null)
	{
		$figure = new Square();
		$allFigures = $figure->getFinalFigure($startNumber, $numberFigures);

		foreach ($allFigures as $figure) {
			$this->convertArrayToString($figure);
		}
	}

	/**
	 * Print figure into the browser
	 *
	 * @param $matrix
	 */
	private function convertArrayToString($matrix){
		foreach($matrix as $key => $line){
			$printLine = implode("", $line);
			$printLine = str_replace(' ', '&nbsp;&nbsp;', $printLine);
			$printLine .= "<br />" . PHP_EOL;;
			print $printLine;
		}
	}
}
