<?php

/**
 * * BrushTool implements Tools Class
 */


class BrushTool implements Tool{
	public function mouseDown(){
		echo "Brush icon";
	}

	public function mouseUp(){
		echo "Draw a line..!";
	}
}