<?php

namespace App\Console\Commands;

class Triangle extends AbstractCommand
{
	protected $figureName = 'triangle';

	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'draw:triangle {startNumber?} {numberFigures?}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Triangle print';

}
