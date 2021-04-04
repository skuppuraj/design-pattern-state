<?php

require 'Canvas.php';
require 'Tool.php';
require 'SelectionTool.php';
require 'BrushTool.php';

$canvas = new Canvas();

$canvas->setCurrentTool( new SelectionTool() );
$canvas->mouseDown();
$canvas->mouseUp();

$canvas->setCurrentTool( new BrushTool() );
$canvas->mouseDown();
$canvas->mouseUp();