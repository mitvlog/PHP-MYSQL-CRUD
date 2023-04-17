
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

             <form method="post">
                <div>
                    <input type="text" name="search">
                  <button type="submit" name="submit">search </button>
                 </div>
               </form>
               <div class="container">
                <table class="table table-striped">
                  <?php
                  include 'connection.php';
                  if(isset($_POST['submit'])){
                 $search=$_POST['search'];
                 $insert_query="SELECT * FROM `jobregistration` where id like '%$search%' or
                 name like '%$search%' ";
                 $sql=mysqli_query($con,$insert_query);
                 if($sql){
                  if(mysqli_num_rows($sql)>0){
           echo "<thead>
           <tr>
             <th scope='col'>id</th>
             <th scope='col'>Name</th>
             <th scope='col'>email</th>
             <th scope='col'>jobpost</th>
             </tr>
             </thead>";
            while( $row=mysqli_fetch_assoc($sql)){
            echo '<tbody>
            <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['jobpost'].'</td>
            </tr>
            </tbody>';
            }
                  }else{
                    echo "<h2>data not found</h2>";
                  }
                  
                 }
                  }
                  ?>
                </table>
               </div>
</body>
</html>