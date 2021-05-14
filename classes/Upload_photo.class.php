<?php
	class Upload_photo {
		private $photo_to_upload;
		private $image_file_type;
		private $temp_image;
		public $new_temp_image; //hiljem, kui class hakkab kõike ise tegema, siis ilmselt private
		
		function __construct($photo_to_upload, $image_file_type){
			$this->photo_to_upload = $photo_to_upload;
			$this->image_file_type = $image_file_type;//see tuleks edaspidi klassis kohapeal kindlaks teha
			//ka test, kas on üldse pilt ja sobiv, peaks siin klassis olema
			$this->temp_image = $this->create_image_from_file($this->photo_to_upload["tmp_name"], $this->image_file_type);
		}
		
		private function create_image_from_file($image, $image_file_type){
			$temp_image = null;
			if($image_file_type == "jpg"){
				$temp_image = imagecreatefromjpeg($image);
			}
			if($image_file_type == "png"){
				$temp_image = imagecreatefrompng($image);
			}
			return $temp_image;
		}
	}//class lõppeb