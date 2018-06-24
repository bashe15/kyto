<?php
/**
 * Created by PhpStorm.
 * User: Jovan
 * Date: 6/25/2018
 * Time: 1:10 AM
 */

namespace App\Exceptions;


class InvalidNumberFigures extends \Exception
{
	public function __construct(
		string $message = 'Invalid number of figures given.',
		int $code = 0,
		\Throwable $previous = null
	) {
		parent::__construct($message, $code, $previous);
	}
}