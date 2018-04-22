<?php

include('config.php');
mysql_select_db( "url_shortner", $con ); //Replace with your MySQL DB Name


$de = mysql_real_escape_string( $_GET[ "decode" ] ); //Get shorten url for decode

$result = mysql_query( "select * from links where shorten_url='$de'" ); //Get Full url

while ( $row = mysql_fetch_array( $result ) ) {
    $res = $row[ 'url' ];
    header( 'Location:' . $res ); //Redirect to original URL using shorten url
}

?>
 