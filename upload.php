<?php
		header('Content-type: application/json');
include_once 'dbconfig.php';
if(isset($_POST))
{
$addr=$_POST['address'];
$lat=$_POST['latitude'];
$lng=$_POST['longitude'];
$ipaddr=$_SERVER['REMOTE_ADDR'];

$tmst=$_POST['stamp'];
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";

	// new file size in KB
	$new_size = $file_size/1024;
	$rnd=round($new_size,2);
	$ns=$rnd.KB;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);
/*echo "111----".$final_file."<br>";
echo "111----".$file_type."<br>";
echo "111----".$ns."<br>";
echo "111----".$addr."<br>";
echo "111----".$ipaddr."<br>";
echo "111----".$lat."<br>";
echo "111----".$lng."<br>";*/
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql=mysqli_query($conn,"insert into tbl_uploads values(0,'$final_file','$file_type','$ns','$addr','$ipaddr',1,'$lat','$lng',null)");
    /*if ($sql) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	exit();*/

echo json_encode("success");
	}
	else
	{
		echo json_encode("error");
	}
}
?>
