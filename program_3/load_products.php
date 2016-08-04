<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Include dbconnection string
include('dbconnect.php');

// file_get_contents - reads a file
// json_decode - decodes json obviously, but the "true" turns the json into an associative array.
$json_array = json_decode(file_get_contents('products_big.json'),true);

// These two commands would dump the json array for viewing in a clear manner.
// Only needed for debugging
// echo "<pre>";
// print_r($json_array);


//For each entry in the json_array ... do something with it.
foreach($json_array as $entry)
{
    // Remember to use  str_replace to replace '160' with a '~'
	$img = str_replace("160_.jpg 1x", "~", $entry['imgs'][0]);
	$price = substr($entry['price'], 1);
	$price = floatval($price);
	
    // Remember to use substring to turn price into a float.
    // Create sql insert statement
	$query = "INSERT INTO products VALUES('', '{$entry['category']}', '{$entry['h2']}','{$price}','$img')";
    // Insert each into database here
	$conn->query($query);
	
}
echo "done";
?>