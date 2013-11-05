<?php


// This is a file that is meant to be included into a php webpage.
// This is not meant to have the individual parts or functions be used seperately.

// This file checks to see if the $_SESSION variable 'uploadfn' is set and uploads
// the infromation that is saved in that file specified. 
// The infromation from this file is then verified and assured to be accurate.
// The infomation is the saved into a PHP $_SESSION array for later use.

// Checks to see if the filename is set if not then the code is not run

$load = FALSE;
if (isset($_FILES["upload"])) {
	if ($_FILES["upload"]["error"] > 0)
	  {
	  echo "Error: " . $_FILES["upload"]["error"] . "<br>";
	  }
	else
	  {

	  if ($_FILES["upload"]["type"] != 'text/plain') {
	  	echo "Bad File Type";
	  	exit;
	  }

	  $filecontents = file_get_contents($_FILES["upload"]["tmp_name"]);
	  $file_data = unserialize($filecontents);
	  $load = TRUE;
	  }
}


?>