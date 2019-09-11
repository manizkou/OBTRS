<?php

$db_conn = mysqli_connect("www.samrat.01cloud.com","samratcl_samrat","f12sh09tMn","samratcl_busreserve_db");

// Evaluate the connection
if (mysqli_connect_errno())
{
    echo mysqli_connect_error();
}
else
{
    echo "Successful database connection, happy coding!!!";
}

?>