<?php 

function __autoload( $class )
{
	$class = ROOT . DS . str_replace( '\\' , DS, $class ) . '.php'; 

	if( ! file_exists( $class ) )  {
		throw new Exception("File path:  '{$class}' nor fount");
	}

	require_once( $class );

}