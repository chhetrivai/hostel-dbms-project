<?php 
  $statusMsg = '';
  $conn = mysqli_connect('localhost','root','','hosteldb');
  if(!$conn){
  	echo"connection failed".mysqli_error($conn);
  }
 
 $first_name = test_input($_REQUEST['firstname']);
 $last_name =test_input( $_REQUEST['lastname']);
 $gender = test_input($_REQUEST['gender']);
 $address =  test_input($_REQUEST['address']);
 $email =  test_input($_REQUEST['email']);
 $phoneno =  test_input($_REQUEST['phone']);
 $entrydate=  test_input($_REQUEST['entrydate']);
 $rollno =  test_input($_REQUEST['rollno']);
 $image=  test_input($_REQUEST['file']);
 
 function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

 //performin insert query operation
 $sql = "INSERT INTO student(Firstname,Lastname,Email,Address,Phoneno,Rollno,EntryDate,Gender,Image) VALUES('$first_name','$last_name','adress',phoneno,'rollno','entrydate','$gender','$image');";
 if(mysqli_query($conn,$sql)){
 	echo"<h3> data stored in a database successfully.</h3>"
 } else{
 	echo "Error:".mysqli_error($conn);
 }
 mysqli_close($conn);
 ?>

