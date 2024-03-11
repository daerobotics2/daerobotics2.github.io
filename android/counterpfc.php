<?php
$fp = fopen("/var/www/counterdzayas.txt", "r");



// Get the existing count

$count = fread($fp, 1024);



// Close the file

fclose($fp);



// Add 1 to the existing count

$count = $count + 1;



// Display the number of hits

// If you don't want to display it, comment out this line




// Reopen the file and erase the contents

$fp = fopen("/var/www/counterdzayas.txt", "w");



// Write the new count to the file

fwrite($fp, $count);



// Close the file

fclose($fp);


?>
