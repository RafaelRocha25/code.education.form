<?php

namespace src\Classes;

use src\Interfaces\FieldInterface;

class Select extends Field implements FieldInterface
{

	private $options = array();
	private $selected = "";

	public function setOptions(array $options)
	{
		$this->options = $options;
	}

	public function getOptions()
	{
		return $this->options;
	}

	public function setSelected($selected)
	{
		$this->selected = $selected;
	}

	public function getSelected()
	{
		return $this->selected;
	}

	public function add()
	{
		$field = "";

		$field .= "<label>{$this->getLabel()}: </label> <br />";
		$field .= "<select name='{$this->getName()}'>";
			$field .= $this->genereteOptions();
		$field .= "</select>";

		return $field;
	}

	public function genereteOptions()
	{
		$optionsText = "";
		$options = $this->getOptions();
		$selected = $this->getSelected();

		if( count($options > 0) )
		{
			foreach($options as $key => $value) {
				if( $selected && $selected == $key) {
					$optionsText .= "<option selected value='{$key}'>{$value}</option>";
				} 

				else {
					$optionsText .= "<option value='{$key}'>{$value}</option>";
				}
			}
		}

		return $optionsText;
	}

}