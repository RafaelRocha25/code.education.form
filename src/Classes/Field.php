<?php

namespace src\Classes;
use src\Interfaces\FieldInterface;
use src\Interfaces\HelperInterface;

abstract class Field
{

	##Properties
	private $name;
	private $value;
	private $attrs = "";
	private $label;

	##Dependencies
	public $helper;

	public function __construct(HelperInterface $helper)
	{
		$this->helper = $helper;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function setAttrs($attrs)
	{
		$this->attrs = $attrs;
	}

	public function getAttrs()
	{
		return $this->helper->formatAttributes($this->attrs);
	}

	public function setLabel($label)
	{
		$this->label = $label;
	}

	public function getLabel()
	{
		return $this->label;
	}

}

##criar novas classes que vão extender dessa, com seus atributos customizados