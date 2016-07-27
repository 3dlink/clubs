<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class StartController extends AppController {
	public $components = array('Paginator', 'Session');


	public $uses = array('Application');



	public function upload($id = null) {
		$this->autoRender = false;

		$time = strtotime ( "now" );
		$targetFolder = '../webroot/files/'; // Relative to the root
		if (! empty ( $_FILES )) {
			$tempFile = $_FILES ['file'] ['tmp_name'];
			$targetPath = $targetFolder;
			// Validate the file type
			$fileTypes = array (
					'jpg',
					'jpeg',
					'gif',
					'png',
					'JPG',
					'JPEG',
					'GIF',
					'PNG'
			); // File extensions
			$fileParts = pathinfo ( $_FILES ['file'] ['name'] );
			if (in_array ( $fileParts ['extension'], $fileTypes )) {
				$name = "img" . $time . $this->__randomStr ( 3 );
				$targetFile = rtrim ( $targetPath, '/' ) . '/' . $name . "." . $fileParts ['extension'];
				if (move_uploaded_file ( $tempFile, $targetFile )) {
					$namepath = $name . "." . $fileParts ['extension'];


		if(!is_null($id)){
					$this->Application->id = $id;
					$this->Application->saveField('logo', $namepath);

	}
					return json_encode ($namepath );
				} else {
					return json_encode ( array (
							false,
							false 
					) );
				}
			} else {
				echo 'Imagen no valida';
			}
		}
	}

	function __randomStr($length) {
		$str = '';
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	
		$size = strlen ( $chars );
		for($i = 0; $i < $length; $i ++) {
			$str .= $chars [rand ( 0, $size - 1 )];
		}
	
		return $str;
	}


}
