<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="container">
  <div class="text-center">
    <h2 class="w-100">Image</h2>
    <p>Images can improve the design and the appearance of a web page.</p>
    
    <img src="logo.png" width="200" height="200" alt="">
  </div>
  <div class="row">
    <div class="col-md-6 ">
      <a href="<?php echo"ifframe.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
         Previous
      </button></a>
    </div>
    <div class="col-md-6 ">
        <a href="<?php echo"table.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
       Next
      </button></a>
    </div>
  </div>
</div>
    <?php include("footer.php");  ?>
  </body>
</html>
