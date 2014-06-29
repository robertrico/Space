<?php
	App::uses('AppController', 'Controller');
	

	class AnswersController extends AppController {
	/*
	* Include Scripts for use with Cakephp
	*/
		public $helpers = array('Js' => array('Jquery'));
		
		//public function beforeFilter() {
		//	parent::beforeFilter();
		//	$this->Auth->allow('space', 'view');
		//}
		public function space(){
			
		}
		public function hello(){
			echo "Hello World!";
		}
	}
