 <?php
$conn = mysqli_connect("localhost", "root", "", "shop");

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $rcv = $_POST['rcv'];
 $courier = $_POST['courier'];
 $q = "UPDATE product_status set o_id=$id, recv_sts='$rcv', cour_comp='$courier' where id=$id";

 $query = mysqli_query($conn,$q);

 header('location:display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

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
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Recieved Status: </label>
 <input type="text" name="rcv" class="form-control"> <br>

 <label> Courier Name: </label>
 <input type="text" name="courier" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>