<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="container">
  <div class="text-center mt-5">
    <h2 class="pb-3">Multimedia tag</h2>
    <video width="400" controls>
  <source src="video.mp4" type="video/mp4">

  Your browser does not support HTML5 video.
</video>

  </div>
    <div class="row">
      <div class="col-md-6 ">
        <a href="<?php echo"table.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
           Previous
        </button></a>
      </div>
      <div class="col-md-6 ">
        <a href="<?php echo"form.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
           Next
        </button></a>
      </div>
    </div>
  </div>
  <?php include("footer.php");  ?>
  </body>
</html>
