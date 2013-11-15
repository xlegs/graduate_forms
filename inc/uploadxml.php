<?php
// This is a file that is meant to be included into a php webpage.
// This is not meant to have the individual part or functions be used seperately.

// This file takes a string as the filename of the XML backend file (currently hardcoded)
// retives the infomation in a string uses the SimpleXML Library 
// to convert the text into a SimpleXMLObject object format and processes the object
// into php $_SESSION array to make is easier to use in later contexts

//php error checking code 
// ini_set('display_error', 'On');

//this function rewrites thea array to a more usable format
function rewriteArray( $oldarray ) {
    $array = array( 
	"systems" => array(
		"advisors" => array(),
		"courses" => array(),
		"pairnumbers" => array()
	),
	"communication_and_microwave" => array(
		"advisors" => array(),
		"courses" => array(),
		"pairnumbers" => array()
	),
	"electronics" => array(
		"advisors" => array(),
		"courses" => array(),
		"pairnumbers" => array()
	)
    );
    foreach ( $array as $arraykey => $arrayvalue){
	foreach( $oldarray[$arraykey] as $coursekey => $coursevalue){
	    if( $coursekey == 0 || $coursekey == 2)
	    	continue;
	    if( $coursekey == 1){
		$array[$arraykey]['advisors'] = $coursevalue;
	    }
	    else{
		$index = $coursevalue[0];
		if($coursevalue[3] != 0){
		    $pair = $coursevalue[3];
		    $array[$arraykey]['pairnumbers'][$pair][$index] = array("number" => $coursevalue[0],"name" => $coursevalue[1],"units" => $coursevalue[2],"description" => $coursevalue[4]);
		}
		$array[$arraykey]['courses'][$index] = array("number" => $coursevalue[0],"name" => $coursevalue[1],"units" => $coursevalue[2],"description" => $coursevalue[4]);
	    }
	}
    }
    return $array;
}

function js_array($array){
	$newarray = array();
	foreach( $array as $arraykey => $arrayvalue){
		foreach( $arrayvalue['courses'] as $coursekey => $coursevalue){
			$newarray[$coursekey] = $coursevalue;
		}
	}
	return $newarray;
}

//take in a file name to be parsed
$systemsfile = file("systems.csv");
$microwavesfile = file("microwaves.csv");
$electronicsfile = file("electronics.csv");

foreach($systemsfile as $k)
    $csv1[] = explode(',', str_replace('"', "", $k));

foreach($microwavesfile as $k)
    $csv2[] = explode(',', str_replace('"', "", $k));

foreach($electronicsfile as $k)
    $csv3[] = explode(',', str_replace('"', "", $k));

$csvArray = array( "systems" => $csv1, "communication_and_microwave" => $csv2, "electronics" => $csv3);

$csvNewArray = rewriteArray($csvArray);
$_SESSION['xmlDataBase'] = $csvNewArray;

$js = js_array($csvNewArray); 
$JavaScript_Array = json_encode($js);

//remove the these based on what actually needs to happen
// echo "<pre>";
// print_r($JavaScript_Array);
// //print_r($csvArray);
// echo "</pre>";
?>
