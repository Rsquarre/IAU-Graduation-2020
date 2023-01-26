<?php 
ob_start();
header('Content-Type: text/html; charset=utf-8');

include 'connection.php';
if($con === false){
    die('error connect ' . mysqli_connect_error());
}

// 2- Select database
if(!mysqli_select_db($con, "Database-Name"))
    die("Could not open the database </body></html>");
    
    //update 
$query = 'UPDATE graduates SET checking = "' . $_POST["new_checking"] . '" WHERE student_id = ' . $_POST["student_id"];

    
    if(mysqli_query($con, $query)){
        echo "Successful.";
        header('Location:2020-Graduates.php');
        
    } else {
        echo "Error".mysqli_error($con);
    }
     


    //close connection 
    mysqli_close($con);
    
    header('Location:2020-Graduates.php');
ob_end_flush();
?>
