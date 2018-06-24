<?php

namespace App\Figures;

class Square extends Figure
{
	/**
	 * Square constructor.
	 */
	public function __construct() {}

	/**
	 * @function Creating figure based on description from a documentation
	 *
	 * @param $lines
	 * @param $primeNumbers
	 *
	 * @return array
	 */
	public function getFigure($lines, $primeNumbers = null) : array
	{
		$finalMatrix = [];

		$columns = $primeNumbers[gmp_intval(ceil($lines / 2))];
		$startPosition = gmp_intval(floor($lines / 2));

		$k = 0;
		for ($i=$startPosition; $i>=0; $i--){
			$values = [];
			for($j=0; $j<$columns; $j++){
				if($i==$startPosition){
					if ($j==0 || $j==$columns-1) {
						$values[] = "+";
					} else {
						$values[] = "x";
					}
				} elseif ($i == 0 || $i == 1) {
					if ($j == gmp_intval(floor($columns /2))) {
						$values[] = $i == 0 ? "+" : "x";
					} else {
						$values[] = " ";
					}
				} else {
					if($j > ($k*2) && $j < ($columns-($k*2)-1)) {
						$values[] = "x";
					} else {
						$values[] = " ";
					}
				}
			}

			$finalMatrix[$startPosition + $k] = $values;
			$finalMatrix[$startPosition - $k] = $values;
			$k++;
		}
		ksort($finalMatrix);

		return $finalMatrix;
	}

}
