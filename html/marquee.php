<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="container mt-5">
  <h2 class=" text-center pb-2">Marquee Effect</h2>
  <div class="">
    <marquee width="100%" behavior="alternate">marquee </marquee>
  </div>


    <div class="row">
      <div class="col-md-6 ">
        <a href="<?php echo"form.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
           Previous
        </button></a>
      </div>
      <div class="col-md-6 ">
        <a href="<?php echo"index.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
           Next
        </button></a>
      </div>
    </div>
  </div>
  <?php include("footer.php");  ?>
  </body>
</html>
