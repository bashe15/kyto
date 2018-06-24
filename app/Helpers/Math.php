<?php

namespace App\Helpers;

class Math
{
	/**
	 * @function Getting a list of primer numbers , but always must be provided start number and how many numbers
	 *
	 * @param $startNumber
	 * @param $totalNumbers
	 *
	 * @return array
	 */
	public static function getPrimeNumbers($startNumber, $totalNumbers){
		$primeNumbers[] = gmp_intval(gmp_nextprime($startNumber - 1 ));
		for ($i=0; $i<$totalNumbers - 1; $i++) {
			$primeNumbers[] = gmp_intval(gmp_nextprime($primeNumbers[$i]));
		}
		return $primeNumbers;
	}

}