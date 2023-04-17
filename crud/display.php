
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">degree</th>
      <th scope="col">mobile</th>
      <th scope="col">email</th>
      <th scope="col">refer</th>
      <th scope="col">jobpost</th>
      <th scope="col">language</th>
      <th scope="col">Images</th>
      <th colspan="2">operations</th>
    </tr>
  </thead>
  <tbody>
   
    <?php
    include 'connection.php';
    
    $display="select * from jobregistration";
    $query=mysqli_query($con,$display);
   
    
    while($res=mysqli_fetch_array($query)){
     
     
        ?>
      
         <tr>
      
      <td><?php echo $res['id'];?></td>
      <td><?php echo $res['name'];?></td>
      <td><?php echo $res['degree'];?></td>
      <td><?php echo $res['mobile'];?></td>
      <td><?php echo $res['email'];?></td>
      <td><?php echo $res['refer'];?></td>
      <td><?php echo $res['jobpost'];?></td>
      <td><?php echo $res['multipleData'];?></td>
    <td> <?php  
    $temp = explode(',',$res['pic'] );

    for($i=0;$i<count($temp);$i++){
      echo "<img src='upload/{$temp[$i]}' width='100' height='100'/>";
    }
       
     ?></td>
      <td><a href="./delete.php ?id=<?php echo $res['id'];?>">delete</a>
      <a href="./update.php ?id=<?php echo $res['id'];?>" >edit</a>

      </td>

     
    </tr>
    <?php
    }
    ?>
   
   
  </tbody>
</table>
</body>
</html>