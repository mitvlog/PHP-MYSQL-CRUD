<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container my-5">
        <form method="post">
        <div class="input-group-text">
    <input class="form-check-input mt-0" type="checkbox" value="javascript"  name="data[]">javascript
  </div>
  <div class="input-group-text">
    <input class="form-check-input mt-0" type="checkbox" value="php"  name="data[]">php
  </div>
  <div class="input-group-text">
    <input class="form-check-input mt-0" type="checkbox" value="sql"  name="data[]">sql
  </div>
  <div class="input-group-text">
    <input class="form-check-input mt-0" type="checkbox" value="html"  name="data[]">html
  </div>
  <button class="btn btn-dark my-3" type="submit" name="submit">submit</button>
        </form>
    </div>
  </body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $datas=$_POST['data'];
    // echo $datas;
    $allData=implode(",",$datas);
    echo $allData;
    $sql="INSERT INTO `multipledata`( `checkBoxData`) VALUES ('$allData')";
    $result=mysqli_query($con,$sql);
    if($result){
        ?>
        <script>
            alert("inserted successfully");
        </script>
        <?php
    }else{
        echo "not inserted";
    }
}
?>