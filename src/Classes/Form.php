<?php

namespace src\Classes;
use src\Interfaces\FormInterface;
use src\Interfaces\HelperInterface;

class Form implements FormInterface
{

	private $action;
	private $name;
	private $method;
	private $enctype;
	private $attrs = "";

	public $helper;

	public function __construct(HelperInterface $helper)
	{
		$this->helper  = $helper;
	}

	public function setAction($action)
	{
		$this->action = $action;
	}

	public function getAction()
	{
		return $this->action;
	}

	public function setMethod($method)
	{
		$this->method = $method;
	}

	public function getMethod()
	{
		return $this->method;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setEnctype($setEnctype)
	{
		$this->setEnctype = $setEnctype;
	}

	public function getEnctype()
	{
		return $this->setEnctype;
	}

	public function setAttrs($attrs)
	{
		$this->attrs = $attrs;
	}

	public function getAttrs()
	{
		return $this->helper->formatAttributes( $this->attrs );
	}

	public function open() 
	{
		return "<form action='{$this->getAction()}' name='{$this->getName()}' method='{$this->getMethod()}' enctype='{$this->getEnctype()}' {$this->getAttrs()}>";
	}

	public function close()
	{
		return "</form>";
	}


}