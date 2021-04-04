<?php

/**
 * SelectionTool implements Tools Class
 */

require 'Tool.php';

class SelectionTool extends Tool{
	public function mouseDown(){
		echo "Selection icon";
	}

	public function mouseUp(){
		echo "Draw the dashed rectangle..!";
	}
}