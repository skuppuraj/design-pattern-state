<?php

/**
 * SelectionTool implements Tools Class
 */


class SelectionTool implements Tool{
	public function mouseDown(){
		echo "Selection icon";
	}

	public function mouseUp(){
		echo "Draw the dashed rectangle..!";
	}
}