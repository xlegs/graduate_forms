<?php

// This is a file that is meant to be included into a php webpage.
// This is not meant to have the individual parts or functions be used seperately.

// This file converts all the variable contained within a SESSION array 
// into a serialized form for printing to the document.

if(!($rawformcontents = serialize($_POST)))
    exit;
echo $rawformcontents;
?>