<?php

	define( 'ROOT', dirname( __FILE__ ) );
	define( 'DS', DIRECTORY_SEPARATOR );

	require_once( ROOT . DS . 'autoload.php' );


	use src\Classes\GenerateForm;
	use src\Classes\HelperForm;
	use src\Classes\Input;
	use src\Classes\Select;
	use src\Classes\Form;

	$helper = new HelperForm();
	$input  = new Input($helper);
	$select = new Select($helper);
	$form   = new Form($helper);

	$form = new GenerateForm($input, $select, $form);
	echo $form->render();
		


