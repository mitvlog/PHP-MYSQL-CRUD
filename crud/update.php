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
<section class="vh-100" style="background-color: blue;">
  <div class="container h-50">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                <?php
include 'connection.php';
$ids=$_GET['id'];
$show="select * from jobregistration where id={$ids}";
$data=mysqli_query($con,$show);
$array=mysqli_fetch_array($data);
if(isset($_POST['submit'])){
    $up=$_GET['id'];
    $name=$_POST['name'];
    $degree=$_POST['degree'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $jobpost=$_POST['jobpost'];
    $datas=$_POST['data'];
    // echo $datas;
    $allData=implode(",",$datas);
   
    $insertquery="UPDATE `jobregistration` 
    SET `id`='$ids',`name`='$name',`degree`='$degree',`mobile`='$mobile',`email`='$email',`refer`='$refer',`jobpost`='$jobpost',
    `multipleData`='$allData'
     WHERE id='$up' ";
    $res=mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
            alert("data update successfully");
            header("location: display.php");
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("not updates");
        </script>
        <?php
    }
}
?>


                <form class="mx-1 mx-md-4" method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="name" value="<?php echo $array['name'];?>" />
                      <label class="form-label" for="form3Example1c">Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example3c" class="form-control" name="degree" value="<?php echo $array['degree'];?>"/>
                      <label class="form-label" for="form3Example3c">degree</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="form3Example3c" class="form-control" name="mobile" value="<?php echo $array['mobile'];?>"/>
                      <label class="form-label" for="form3Example3c">mobile</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="email" value="<?php echo $array['email'];?>"/>
                      <label class="form-label" for="form3Example3c">email</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example3c" class="form-control" name="refer" value="<?php echo $array['refer'];?>"/>
                      <label class="form-label" for="form3Example3c">refer</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example3c" class="form-control" name="jobpost" value="<?php echo $array['jobpost'];?>" />
                      <label class="form-label" for="form3Example3c">jobpost</label>
                    </div>
                  </div>
                  <div class="form-outline flex-fill mb-0">
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
                 </div>

                  <!-- <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div> -->

                  <!-- <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div> -->

                  
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">update</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 w-400px">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_qpMPzQeQg3Q3F24tkGo2XDr8NYiT6qkYQQ&usqp=CAU"
                  class="img-fluid" alt="Sample image">
                  <button><a href="./display.php">display</bitton>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
