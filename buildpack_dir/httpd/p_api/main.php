<?php
// Include the HTML file
include 'header.html';
?>
    <h1>Welcome to my website!</h1>

<?php
// Include the JavaScript file
include 'script.js';
?>


<?php

// Include the inc.php file
include '../../src/p/inc/greet.inc';

// Use the greet function to output a greeting
greet('John');

// Use the farewell function to output a farewell
farewell('John');

?>