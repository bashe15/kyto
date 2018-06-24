<?php

namespace App\Figures;

class Triangle implements Figure
{
	/**
	 * Triangle constructor.
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
		$columns = ($lines * 2) - 1;
		$middleColumnNumber = gmp_intval(floor($columns/2));
		$finalMatrix = [];
		for ($i=0; $i<$lines; $i++) {
			$values = [];
			$k = $i-1;
			for($j=0; $j<$columns; $j++){
				if($i == 0){
					if( $j == floor( $columns/2))
						$values[] = '+';
					else
						$values[] = ' ';
				} else {
					if($j >= ($middleColumnNumber-$k) &&  $j <= ($middleColumnNumber+$k))
						$values[] = 'x';
					else
						$values[] = ' ';
				}
			}
			$finalMatrix[] = $values;
		}

		return $finalMatrix;
	}

}
