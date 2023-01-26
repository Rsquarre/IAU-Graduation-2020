<?php 

header('Content-Type: text/html; charset=utf-8');

include 'connection.php';

if($con === false){
    die('error connect ' . mysqli_connect_error());
}

	//get data and insert
	$student_id = $_POST["student_id"];
    $student_name = $_POST["student_name"]; 
    $college_branche = $_POST["college_branche"];
    $student_major = $_POST["student_major"];
    $graduation_semester = $_POST["graduation_semester"];
    $gender = $_POST["gender"];
    $checking = $_POST["checking"];

    if($student_id == ''){
		header('Location:Insert-Graduates.php');
	} else {
        
$query = "INSERT INTO graduates (student_id , student_name , college_branche , student_major , graduation_semester , gender , checking ) VALUES ('$student_id' , '$student_name' , '$college_branche' , '$student_major' , '$graduation_semester' , '$gender' , '$checking')";
        
		if(mysqli_query($con, $query)){
			$last_id = mysqli_insert_id($con);
        header('Location:http://rsquare-sa.com/Insert-Graduates.php');	

		} else {
			echo "error " . mysqli_error($con);
		}
	}
	mysqli_close($con);
        header('Location:Insert-Graduates.php');
?>