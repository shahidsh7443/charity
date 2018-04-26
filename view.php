<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
</head>
<body>

<div id="body" style="margin-top:  5%;">
	<table width="100%" border="1" cellpadding="10">
    <tr>
    <th colspan="12">Uploads.....<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
		<td>Address</td>
    <td>IP Address</td>
    <td>Is_active</td>
		<td>Location</td>
		<td>Time of Upload</td>
    <td>View</td>
    </tr>
    <?php
	$sql=mysqli_query($conn,"select * from tbl_uploads");
	while($row=mysqli_fetch_array($sql))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
				<td><?php echo $row['address'] ?></td>
        <td><?php echo $row['ipaddress'] ?></td>
        <td><?php echo $row['isactive'] ?></td>
				<td><a href="https://www.google.com/maps/?q=<?php echo $row['latitude'] ?>,<?php echo $row['longitude'] ?>" target="_blank">View Map</a>
        <td><?php echo $row['timestamp'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>

</div>
</body>
</html>
