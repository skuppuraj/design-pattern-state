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
	
}