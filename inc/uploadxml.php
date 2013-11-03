<?php


// This is a file that is meant to be included into a php webpage.
// This is not meant to have the individual part or functions be used seperately.

// This file takes a string as the filename of the XML backend file (currently hardcoded)
// retives the infomation in a string uses the SimpleXML Library 
// to convert the text into a SimpleXMLObject object format and processes the object
// into php $_SESSION array to make is easier to use in later contexts

//input file name here, hardcoded so user cannot change.
$xmlfile = file_get_contents("testxml.xml");

//convert the file when has been converted into a string by file get contents
//into an object using the SimpleXML function library
$xmlcontents = simplexml_load_string($xmlfile);

//function to recursively convert a SimpleXML object that contains other similar objects
function ObjtoArray(SimpleXMLElement $obj) {
    //convert the object to the an array
    $array = (array)$obj;
    $att_array = new array;
    //for each of the elements of the of the new array recursively call this function
    foreach( array_slice($array, 0) as $key => $value ) {
		if( $value instanceof SimpleXMLElement ){
			$array[$key] = empty($value) ? NULL : ObjtoArray($value);
		}
		if( $attributes = $value->attributes()){
			$att_array[$key] = $value; 
		}
    }
	$_SESSION['pairnumber'] = $att_array;
    return $array;
}

//call the above function on our xml file contents
$xmlArray = ObjtoArray($xmlcontents);

$_SESSION['xmlDataBase'] = $xmlArray;

//remove the these based on what actually needs to happen
//echo var_dump($xmlArray);
?>
