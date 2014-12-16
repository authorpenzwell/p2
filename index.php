<?php

require 'Autoloader.php'; //requires autoloader file

//use to auto detect line endings
ini_set('auto_detect_line_endings', TRUE);
// Change it in one place 
use \classes\File as kp;

//makes csv file a variable
$csv1 = '\hd2013.csv';
$csv2 = '\hd2013D.csv';

// to upload csv file
$file = kp\filemanger::uploadFile($csv1);
$file2 = kp\filemanger::uploadFile($csv2);

//change into array
$handle = new kp\handlefile();
$handle2 = new kp\handlefile();
	
$records = $handle->headings($file, TRUE);
$headings = $handle->headings($file2, TRUE);



$collegeName = '';
if(isset($_GET['record'])){
	$collegeName = $records[$_GET['record']]['INSTNM'];
}
// Print tables and link 
new \classes\Html\Link($records, $headings);
\classes\Html\html::printTable($records, $headings);
	
?>