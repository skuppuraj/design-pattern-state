<?php

/**
 * * BrushTool implements Tools Class
 */

require 'Tool.php';

class BrushTool extends Tool{
	public function mouseDown(){
		echo "Brush icon";
	}

	public function mouseUp(){
		echo "Draw a line..!";
	}
}