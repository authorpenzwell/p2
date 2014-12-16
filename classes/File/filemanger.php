<?php
namespace classes\File;
	class filemanger {
		
		// Uploading a file for reading.	
		public static function uploadFile($file){
			$handle = fopen($file, "r");
			return $handle;
		}
		public static function closeFile($handle){
			fclose($handle);
		}
	}
?>