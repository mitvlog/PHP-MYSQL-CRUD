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
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $degree=$_POST['degree'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $gender=$_POST['gender'];
    $jobpost=$_POST['jobpost'];
    $password1=$_POST['password'];
    $password=password_hash($password1,PASSWORD_BCRYPT);
    $datas=$_POST['data'];
    // echo $datas;
    $allData=implode(",",$datas);
    $place=$_POST['place'];
    // $file=$_FILES['photo'];
    // // print_r($file);
    //  $filename=$file['name'];
    //  $filepath=$file['tmp_name'];
    //  $filerror=$file['error'];
    //  if($filerror == 0){
    //    $destfile='upload/'.$filename;
    //   // echo "$destfile";
    //    move_uploaded_file($filepath,$destfile);
    $location="upload/";
	$file1=$_FILES['img1']['name'];
	$file_tmp1=$_FILES['img1']['tmp_name'];
	$file2=$_FILES['img2']['name'];
	$file_tmp2=$_FILES['img2']['tmp_name'];
	$file3=$_FILES['img3']['name'];
	$file_tmp3=$_FILES['img3']['tmp_name'];
	$file4=$_FILES['img4']['name'];
	$file_tmp4=$_FILES['img4']['tmp_name'];
	$data=[];
	$data=[$file1,$file2,$file3,$file4];
	$images=implode(',',$data);
      $insertquery="INSERT INTO `jobregistration`( `name`, `degree`, `mobile`, `email`, `refer`,`gender`, `jobpost`,`multipleData`,
      `password`,`pic`,`place`)
     VALUES ('$name','$degree','$mobile','$email','$refer','$gender','$jobpost','$allData','$password','$images','$place')";
    $res=mysqli_query($con,$insertquery);
    if($res){
      move_uploaded_file($file_tmp1, $location.$file1);
		move_uploaded_file($file_tmp2, $location.$file2);
		move_uploaded_file($file_tmp3, $location.$file3);
		move_uploaded_file($file_tmp4, $location.$file4);
      ?>
      <script>
          alert("data inserted successfully");
      </script>
      <?php
  }else{
      ?>
      <script>
      alert("not inserted");
      </script>
      <?php
  }
    }
      

?>




<section>

  <div class="container h-50">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4"  method="POST" enctype='multipart/form-data'>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Name</label>
                      <input type="text" id="form3Example1c" class="form-control" name="name" />
                     
                    </div>
                  </div>
                  <div class="form-group">
									<label>Upload Image 1</label>
								<input type="file" name="img1" class="form-control">
								</div>
								<div class="form-group">
									<label>Upload Image 2</label>
								<input type="file" name="img2" class="form-control">
								</div>
								<div class="form-group">
									<label>Upload Image 3</label>
								<input type="file" name="img3" class="form-control">
								</div>
								<div class="form-group">
									<label>Upload Image 4</label>
								<input type="file" name="img4" class="form-control">
								</div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">degree</label>
                      <input type="text" id="form3Example3c" class="form-control" name="degree" />
                     
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">mobile</label>
                      <input type="number" id="form3Example3c" class="form-control" name="mobile"/>
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">email</label>
                      <input type="email" id="form3Example3c" class="form-control" name="email"/>
                     
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">refer</label>
                      <input type="text" id="form3Example3c" class="form-control" name="refer" />
                     
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <input class="form-check-input" type="radio" name="gender" value="F" >female
            <input class="form-check-input" type="radio" name="gender" value="M" >male
                    </div>
                    
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">jobpost</label>
                      <input type="text" id="form3Example3c" class="form-control" name="jobpost" />
                     
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

                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Password</label>
                      <input type="password" id="form3Example4c" class="form-control" name="password"/>
                     
                    </div>
                  </div>

                 
                
                <select class="form-select" aria-label="Default select example" name="place">
                
  <option selected >Open this select city</option>
  <option value="surat">surat</option>
  <option value="vapi">vapi</option>
  <option value="valsad">valsad</option>
</select>
                  
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Register</button>
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
