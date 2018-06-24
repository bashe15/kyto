<?php
/**
 * Created by PhpStorm.
 * User: Jovan
 * Date: 6/24/2018
 * Time: 10:13 PM
 */

namespace App\Console\Commands;

use App\Figures\Square as SquareFigure;
use App\Figures\Triangle as TriangleFigure;
use App\Helpers\Math;
use Illuminate\Console\Command;

class AbstractCommand extends Command
{
	/**
	 * @var string
	 */
	protected $figureName;

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

	private $figures = [
		'square' => SquareFigure::class,
		'triangle' => TriangleFigure::class
	];

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$startNumber = $this->input->getArgument('startNumber');
		$numberFigures = $this->input->getArgument('numberFigures');

		if( empty($startNumber) ) {
			$startNumber = 5;
		}

		if( empty($numberFigures) ) {
			$numberFigures = 3;
		}

		$rangeFigures = Math::getPrimeNumbers($startNumber, $numberFigures);
		$primeNumbers = Math::getPrimeNumbers(0, end($rangeFigures));

		for( $i = 0; $i < count($rangeFigures); $i++ ) {
			$figure = new $this->figures[$this->figureName]();
			$finalFiqure = $figure->getFigure($rangeFigures[$i], $primeNumbers);
			foreach( $finalFiqure as $key => $line ) {
				$printLine = implode("", $line);
				print $printLine . PHP_EOL;
			}
		}
	}

}
