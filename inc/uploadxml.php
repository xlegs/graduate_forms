<?php
// This is a file that is meant to be included into a php webpage.
// This is not meant to have the individual part or functions be used seperately.

// This file takes a string as the filename of the XML backend file (currently hardcoded)
// retives the infomation in a string uses the SimpleXML Library 
// to convert the text into a SimpleXMLObject object format and processes the object
// into php $_SESSION array to make is easier to use in later contexts

ini_set('display_error', 'On');
//input file name here, hardcoded so user cannot change.
$xmlfile = file_get_contents("courses.xml");

//convert the file when has been converted into a string by file get contents
//into an object using the SimpleXML function library
$xmlcontents = simplexml_load_string($xmlfile);

//function to recursively convert a SimpleXML object that contains other similar objects
function ObjtoArray($obj, $level=0) {
   
    $items = array();
   
    if(!is_object($obj)) return $items;
       
    $child = (array)$obj;
   
    if(sizeof($child)>1) {
        foreach($child as $aa=>$bb) {
            if(is_array($bb)) {
                foreach($bb as $ee=>$ff) {
                    if(!is_object($ff)) {
                        $items[$aa][$ee] = $ff;
                    } else
                    if(get_class($ff)=='SimpleXMLElement') {
                        $items[$aa][$ee] = ObjtoArray($ff,$level+1);
                    }
                }
            } else
            if(!is_object($bb)) {
                $items[$aa] = $bb;
            } else
            if(get_class($bb)=='SimpleXMLElement') {
                $items[$aa] = ObjtoArray($bb,$level+1);
            }
        }
    } else
    if(sizeof($child)>0) {
        foreach($child as $aa=>$bb) {
            if(!is_array($bb)&&!is_object($bb)) {
                $items[$aa] = $bb;
            } else
            if(is_object($bb)) {
                $items[$aa] = ObjtoArray($bb,$level+1);
            } else {
                foreach($bb as $cc=>$dd) {
                    if(!is_object($dd)) {
                        $items[$obj->getName()][$cc] = $dd;
                    } else
                    if(get_class($dd)=='SimpleXMLElement') {
                        $items[$obj->getName()][$cc] = ObjtoArray($dd,$level+1);
                    }
                }
            }
        }
    }

    return $items;
}

function rewriteArray( $oldArray ) {
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
	),
	"applied_mathematics" => array(
		"courses" => array()
	)
    );
    foreach ( $array as $arrayvalue => $arraykey){
	foreach( $arraykey as $value => $key){
	    if( $value == "advisors"){
		$array[$arrayvalue][$value] = $oldArray[$arrayvalue][$value];
	    }
	    if( $value == "courses"){
		foreach( $oldArray[$arrayvalue][$value]['course'] as $coursevalue => $coursekey){
		    $coursename = $coursekey['number'];
		    $array[$arrayvalue][$value][$coursename] = array( "name" => $coursekey['name'], "units" => $coursekey['units'], "description" => $coursekey['description']);
		    if($coursekey['@attributes']){
			$coursepair = $coursekey['@attributes']['pairnumber'];
			$array[$arrayvalue]['pairnumbers'][$coursepair][$coursename] = array( "name" => $coursekey['name'], "units" => $coursekey['units'], "description" => $coursekey['description']);
		    }
		}
	    }
	}
    }
    return $array;
}

//call the above function on our xml file contents
$xmlArray = ObjtoArray($xmlcontents);

$xmlNewArray = rewriteArray($xmlArray);
$_SESSION['xmlDataBase'] = $xmlNewArray;

//remove the these based on what actually needs to happen
// echo "<pre>";
// print_r($xmlNewArray);
// print_r($xmlArray);
// echo "</pre>"
?>
