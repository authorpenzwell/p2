<?php
namespace classes\Html;
	
	// Prints out the Links 
	class Link {
		public function __construct($records, $headings){
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
					// calls the html class
					\classes\Html\html::makeLink('record',$i, $record['INSTNM']);
				}
			}
		}
	}
?>