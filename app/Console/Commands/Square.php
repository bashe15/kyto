<?php

namespace App\Console\Commands;

class Square extends AbstractCommand
{
	protected $figureName = 'square';

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

}
