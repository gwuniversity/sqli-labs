<?php

//including the Mysql connect parameters.
include("../sql-connections/db-creds.inc");
@error_reporting(0);
@$con = mysqli_connect($host,$dbuser,$dbpass);
// Check connection
if (!$con)
{
    echo "Failed to connect to MySQL: " . mysqli_error();
}


    @mysqli_select_db($dbname1,$con) or die ( "Unable to connect to the database: $dbname1".mysqli_error());






$sql_connect_1 = "SQL Connect included";

############################################
# For Challenge series--- Randomizing the Table names.

?>





