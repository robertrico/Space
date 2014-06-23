<?php
	App::uses('AppController', 'Controller');
	

	class AnswersController extends AppController {
		public $helpers = array('Js' => array('Jquery'));
		
		
		public function space(){
			
		}
		public function hello(){
			echo "Hello World!";
		}
	}
