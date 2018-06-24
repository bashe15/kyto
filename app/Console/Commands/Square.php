<?php

namespace App\Console\Commands;

use App\Helpers\Math;
use Illuminate\Console\Command;
use App\Figures\Square as SquareFigure;

class Square extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'draw:square {startNumber?} {numberFigures?}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Square draw in console';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$startNumber = $this->input->getArgument('startNumber');
		$numberFigures = $this->input->getArgument('numberFigures');

		if (empty($startNumber)) {
			$startNumber = 5;
		}

		if (empty($numberFigures)) {
			$numberFigures = 3;
		}

		$rangeFigures = Math::getPrimeNumbers($startNumber, $numberFigures);
		$primeNumbers = Math::getPrimeNumbers(0, end($rangeFigures), end($rangeFigures));

		for($i=0; $i<count($rangeFigures); $i++){
			$figure = new SquareFigure();
			$finalFiqure = $figure->getFigure($rangeFigures[$i], $primeNumbers);
			$this->convertArrayToString($finalFiqure);
		}
	}

	/**
	 * Function for printing the values into the console
	 *
	 * @param $matrix
	 */
	private function convertArrayToString($matrix)
	{
		foreach ($matrix as $key => $line) {
			$printLine = implode("", $line);
			print $printLine . PHP_EOL;
		}
	}

}
