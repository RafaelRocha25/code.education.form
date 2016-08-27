<?php

namespace src\Classes;
use src\Interfaces\HelperInterface;

class HelperForm implements HelperInterface
{
	public function formatAttributes($attr)
	{
		$attrs = "";

		foreach( $attr as $key => $value ) {
			$attrs .= $key . '=' . "'" .$value . "' ";
		}

		return $attrs;
	}

}