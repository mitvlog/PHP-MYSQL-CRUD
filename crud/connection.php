<?php


$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>
    <script>
        alert("connection successful");
    </script>
    <?php
}else{
    echo "no connection";
}

?>