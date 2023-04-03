<?php

$con = new mysqli('127.0.0.1', 'root', 'root', 'crudoperation');
if (!$con) {
    die(mysqli_error($con));
}
/*
creating a new instance of the mysqli class and connecting to a MySQL database using the provided parameters:

$con: This creates a new variable called $con that will hold the mysqli object.
new mysqli(): This creates a new instance of the mysqli class.
'localhost': This is the hostname of the server that the database is located on. In this case, it's "localhost", which means the database is on the same machine as the web server.
'root': This is the username that will be used to connect to the database. In this case, it's "root".
'root': This is the password that will be used to connect to the database. In this case, it's also "root".
'crudeoperation': This is the name of the database that will be connected to. In this case, it's "crudeoperation".
*/

// Create a new mysqli object and connect to the 'crudeoperation' database using the 'root' username and password.


/*

checking if a database connection was successful or not:

if ($con): This is checking if the variable $con contains a valid database connection. If the connection was successful, this condition will be true and the code inside the if block will be executed.

echo "The connection is successful";: This is outputting a message to the browser that indicates that the database connection was successful.

else: If the database connection was not successful, the code inside the else block will be executed.

die(mysqli_error($con));: This is outputting an error message that includes information about the error that occurred. The die() function will terminate the script immediately after outputting the error message, so that the user doesn't see any further output from the script.
*/

// Check if the database connection was successful, and output a message to the browser if it was. If not, output an error message and terminate the script. 




// if (!$con) {
//     echo "The connection is successful";
// } 

// else {
//     die(mysqli_error($con));
// }
