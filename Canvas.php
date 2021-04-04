<?php

/**
 *  Canvas class
 */
class Canvas{
	private $currentTool;

	public function getCurrentTool(){
		return $currentTool;
	}

	public function setCurrentTool( $currentTool ){
		$this->currentTool = $currentTool;
	}

	public function mouseDown(){
		return $this->currentTool->mouseDown();
	}

	public function mouseUp(){
		return $this->currentTool->mouseUp();
	}
	
}