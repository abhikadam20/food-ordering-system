<?php  
       session_start();
       if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
         
       }
     
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
</head>

<body>
    <?php  require 'css/_nav.php' ?>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome To Medical products Delivary</title>
</head>

<body>

    <?php include 'partials/_dbconnect.php'  ?>
    <!-- slide img -->
    <div id="carouselExampleIndicators"   class="carousel slide" data-bs-ride="carousel" style="border-radius:2rem;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg1.jpg" height="400" width="850" class="d-block w-100" alt="..."  style="border-radius:2rem;">
            </div>
            <div class="carousel-item">
                <img src="img/bg2.jpg" height="400" width="850" class="d-block w-100" alt="..."  style="border-radius:2rem;">
            </div>
            <div class="carousel-item">
                <img src="img/bg.jpg" height="400" width="850" class="d-block w-100" alt="..."  style="border-radius:2rem;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container" >
        
        <div class="row">



            <!-- fech all products -->
            <?php $sql = "SELECT * FROM users1";  
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)){
  // echo $row ['srno'];
$pro = $row ['pid'];
$pprice =$row['pprice'];
$desc =$row ['pdescription'];
$name =$row ['pname'];
$img =$row ['img'];
$pprice =$row['pprice'];
$avli =$row['avli'];
$classn="btn btn-success";
if($avli==0){
    $avli="Out Of Stock";
    $classn="btn btn-warning";
}


// use now <h5 class="card-title"><a href="/thrades.php?catid='. $pro .'">'.$desc.' </a></h5>
 echo '
 <div class="col md 4 my-2">
  <div class="card border border-3 border-success" style="width: 18rem; border-radius:2rem;">
      <a href="threads.php?proid='.$pro.'"><img src="'.$img.'" class="card-img-top border" height="200px" width="200px" alt="..." style="border-radius:2rem; ">
      <div class="card-body">
          <h5 class="card-title"><a class="nav-link text-primary " href="threads.php?proid='.$pro.'"><a>₹ '.$pprice.' </a></h5>
         <p class="'.$classn.'" >'.$avli.'</p>
          <p class="card-text"></p> 
          <a  class="btn btn-outline-success" href="threads.php?proid='.$pro.'">'.$name.'</a>
      </div>
  </div>
</div>';

 }

?>
            <!--  adding products-->




        </div>
    </div>

    <?php include 'partials/_footer.php' ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>