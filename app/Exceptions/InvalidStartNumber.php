<?php
/**
 * Created by PhpStorm.
 * User: Jovan
 * Date: 6/25/2018
 * Time: 1:03 AM
 */

namespace App\Exceptions;


class InvalidStartNumber extends \Exception
{
	public function __construct(
		string $message = 'Invalid start number given.',
		int $code = 0,
		\Throwable $previous = null
	) {
		parent::__construct($message, $code, $previous);
	}
}