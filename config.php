<?php

$con = mysql_connect( "localhost", "root", "" ); // Create connection string for DB
if ( !$con ) { 
    //Check database connection error
    die( 'Could not connect: ' . mysql_error() );
}

?>
 