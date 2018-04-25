<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="12">your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
	  <td>Id</td>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
		<td>Address</td>
    <td>IP Address</td>
    <td>Is_active</td>
		<td>Latitude</td>
    <td>Longitude</td>
		<td>Time of Upload</td>
    <td>View</td>
    </tr>
    <?php
	$sql=mysqli_query($conn,"select * from tbl_uploads");
	while($row=mysqli_fetch_array($sql))
	{
		?>
        <tr>
				<td><?php echo $row['id'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
				<td><?php echo $row['address'] ?></td>
        <td><?php echo $row['ipaddress'] ?></td>
        <td><?php echo $row['isactive'] ?></td>
        <td><?php echo $row['latitude'] ?></td>
				<td><?php echo $row['longitude'] ?></td>
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
