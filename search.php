<?php  
       session_start();
       if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
         header("location: login.php");
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

    <title>Welcome - <?php  echo $_SESSION['username'];
    ?></title>
</head>

<body>
    <?php  require 'css/_nav.php' ?>






</body>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome To Food Delivary</title>
</head>

<body>

    <?php include 'partials/_dbconnect.php'  ?>

    <div class="container my-3">
        <h1 class="py-2">Searching you result <em>"<?php  echo $_GET['search'];?>"</em></h1>
        <table>
            <div class="row">
                <?php
   $search= $_GET["search"];
   $sql = "SELECT * FROM users1 WHERE MATCH(pname, pdescription, pprice, img, ptype) against ('$search')";
   $result = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_assoc($result)){
       
          $id= $row['pid'];
          $name = $row['pname'];
          $pprice = $row ['pprice'];
          $pdescription =$row['pdescription'];
          $img =$row['img'];
          $ptype =$row['ptype'];
          $pro = $id;



       echo '
              
       <div class="col md 4 my-2">
       <div class="card border border-3 border-success" style="width: 18rem; border-radius:2rem;">
           <a href="threads.php?proid='.$pro.'"><img src="'.$img.'" class="card-img-top border" height="200px" width="200px" alt="..." style="border-radius:2rem; ">
           <div class="card-body">
               <h5 class="card-title"><a class="nav-link text-primary " href="threads.php?proid='.$pro.'">
               ₹ '.$pprice.' </a></h5>
              
               <p class="card-text"></p> 
               <a  class="btn btn-outline-success" href="threads.php?proid='.$pro.'">'.$name.'</a>
           </div>
       </div>
     </div>';

        
   }

?>
            </div>
        </table>



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


// use now <h5 class="card-title"><a href="/thrades.php?catid='. $pro .'">'.$desc.' </a></h5>
 

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