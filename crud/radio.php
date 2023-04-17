<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post">
            <div>
            <input class="form-check-input" type="radio" name="gender" value="F" >female
            <input class="form-check-input" type="radio" name="gender" value="M" >male
            </div>
            <button type="submit" name="submit">submit</button>
        </form>
    </div>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $gender=$_POST['gender'];
    
    $sql="INSERT INTO `radiodata`(`gender`) VALUES ('$gender')";
    $result=mysqli_query($con,$sql);
    if($result){
        ?>
        <script>
            alert(" gender inserted successfully");
        </script>
        <?php
    }else{
        echo "not inserted";
    }
}
?>
