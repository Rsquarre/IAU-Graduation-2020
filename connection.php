<?php 
    //conect with the server
if(!($con = mysqli_connect("", "", "")))
            die("Could not connect to database </body></html>");


// 2- Select database
        if(!mysqli_select_db($con, "Database-Name"))
            die("Could not open the database </body></html>");

    //check the connection 
    if ($con === false){
        die ('Error ' . mysqli_connect_error());
    }
    
    //print host information 
    //echo 'connect successfullyy. Host info: ' . mysqli_get_host_info($con);
?>