<?php


// This is a file that is meant to be included into a php webpage.
// This is not meant to have the individual parts or functions be used seperately.

// This file checks to see if the $_SESSION variable 'uploadfn' is set and uploads
// the infromation that is saved in that file specified. 
// The infromation from this file is then verified and assured to be accurate.
// The infomation is the saved into a PHP $_SESSION array for later use.

// Checks to see if the filename is set if not then the code is not run
if($_POST['upload'])
    exit;
if($filecontents = unserialize($_POST['upload'])){
    echo var_dump($filecontents);
    $_SESSION['form'] = $filecontents;
}
else
    echo "Error.";
?>