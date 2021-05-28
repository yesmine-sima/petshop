<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "shop");

//if button with the name uploadfilesub has been clicked
if(isset($_POST['uploadfilesub'])) {

$name = $_POST['name'];
$price = $_POST['price'];
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = 'images/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `prodetails` (`name`,`price`,`photo`)  VALUES ('$name','$price','$filename')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "</br>image uploaded"; 
}
}
?>


<!DOCTYPE html>
<html>
<title>Insert Product Detials</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style type="text/css">
		body{
			background-image:url(images/update.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
	</style>
</head>
<body>
 <div class="col-lg-6 m-auto">
<!--Make sure to put "enctype="multipart/form-data" inside form tag when uploading files -->
<form action="" method="post" enctype="multipart/form-data" >
<!--input tag for file types should have a "type" attribute with value "file"-->
<div class="card">
<div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>
<label> Product Name: </label>
<input type="text" class="form-control" name="name" placeholder="name" >
<label> Product Price: </label>
<input type="number" class="form-control" name="price" placeholder="price">
<input type="file" name="uploadfile" />
<input class="btn btn-success" type="submit" name="uploadfilesub" value="upload" />
</div>
</form>
</div>
</body>