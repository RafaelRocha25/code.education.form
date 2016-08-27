<?php

namespace src\Classes;

use src\Interfaces\FieldInterface;

class Input extends Field implements FieldInterface
{

	private $type         = "text";
	private $placeholder  = "";
	private $allowedTypes = array("text", "hidden", "email", "number");

	
	public function setType($type)
	{
		if ( ! $this->checkAllowedTypeField($type) )
			throw new Exception("Tipo de Input inválido");

		$this->type = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setPlaceholder($placeholder)
	{
		$this->placeholder = $placeholder;
	}

	public function getPlaceholder()
	{
		return $this->placeholder;
	}

	public function add()
	{
		 $field = "";

		 $field .= "<label>{$this->getLabel()}: </label> <br />";
		 $field .= "<input type='{$this->getType()}' name='{$this->getName()}' value='{$this->getValue()}' {$this->getAttrs()} placeholder='{$this->getPlaceholder()}' />";

		 return $field;
	}

	public function checkAllowedTypeField($type)
	{
		if( in_array( $type, $this->allowedTypes ) )
			return true;

		return false;
	}

}