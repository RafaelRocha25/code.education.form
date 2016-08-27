<?php

namespace src\Classes;


use src\Classes\GenerateForm;
use src\Interfaces\FieldInterface;
use src\Interfaces\FormInterface;
use src\Interfaces\HelperInterface;

class GenerateForm
{

	protected $input;
	protected $select;
	protected $form;

	public function __construct(FieldInterface $input, 
								FieldInterface $select, 
								FormInterface $form)
	{
		$this->input  = $input;
		$this->select = $select;
		$this->form   = $form;
	}

	public function render()
	{
			
		$formHtml = "";

		##Config Form
		$this->form->setAction("rota.save");
		$this->form->setName("formulario-dinamico");
		$this->form->setMethod("POST");
		$this->form->setEnctype("multipart/form-dat");
		$this->form->setAttrs(array('class' => 'form-group'));

		##Open Form
		$formHtml .= $this->form->open();

		echo '<div class="form-group">';
		
		##Input Name
		$this->input->setType('text');
		$this->input->setName('name');
		$this->input->setLabel('Name');
		$this->input->setPlaceholder('Type your name');
		$this->input->setAttrs(array('class' => 'name', 'required' => 'required', 'class' => 'form-control'));
		$formHtml .= $this->input->add();

		$formHtml .= '</div>';

		echo '<div class="form-group">';
		
		##Input Email
		$this->input->setType('email');
		$this->input->setName('email');
		$this->input->setLabel('E-mail');
		$this->input->setPlaceholder('Type your e-mail');
		$this->input->setAttrs(array('class' => 'email', 'required' => 'required', 'class' => 'form-control'));
		$formHtml .= $this->input->add();

		$formHtml .= "</div>";

		echo '<div class="form-group">';
		
		##Select Country
		$this->select->setName('country');
		$this->select->setLabel('Country');
		$this->select->setOptions(array(1 => 'Brazil', 2 => 'EUA', 3 => 'Holanda'));
		$this->select->setAttrs(array('class' => 'form-control'));
		$this->select->setSelected(2);
		$formHtml .= $this->select->add();

		$formHtml .= "</div>";

		##Close Form
		$formHtml .= $this->form->close();

		return $formHtml;
	}

}