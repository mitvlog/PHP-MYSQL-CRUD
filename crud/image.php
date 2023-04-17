<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="car_name">
        <input type="file" name="docs[]" multiple>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    
  foreach($_FILES['docs']['name'] as $key => $val){
    $name=$_POST['car_name'];
    $rand=rand('111','999');
    $file=$rand.'_'.$val;
    move_uploaded_file($_FILES['docs']['tmp_name'][$key],'upload/'.$file);
    $query="insert into image (car_name,images) values('$name','$file')";
	$fire=mysqli_query($con,$query);
  }
  if($fire)
	{
		
		echo "success";
	}
	else
	{
		echo "failed";
	}
}
?>