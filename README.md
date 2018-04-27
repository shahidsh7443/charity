# Help Website
In this project we have implemented the concept of file upload and mail sending.

##Database Connectivity.
Create a database named "upload" and create a table named "tbl_uploads" with following fields.

CREATE TABLE `tbl_uploads` (`id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ipaddress` varchar(30) NOT NULL,
  `isactive` int(10) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `timestamp` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;


## Location of Uploaded Files.

The uploaded files are stored in "upload folder" of the website.
