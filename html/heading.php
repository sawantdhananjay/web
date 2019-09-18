<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Heading type</title>
  </head>
  <body>
    <h1 class="text-center" >How to display Heading type in web</h1>
    <h2 class="text-center">block level Heading type are h1 to h6</h2>
    <hr>
    <div class="container">
      <div class="text-center">
        <h1>Heading type 1</h1>
        <h2>Heading type 2</h2>
        <h3>Heading type 3</h3>
        <h4>Heading type 4</h4>
        <h5>Heading type 5</h5>
        <h6>Heading type 6</h6>
      </div>

    <div class="row">
      <div class="col-md-6 ">
        <a href="<?php echo"skeletol.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
           Previous
        </button></a>
      </div>
      <div class="col-md-6 ">
        <a href="<?php echo"paragraph.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
           Next
        </button></a>
      </div>
    </div>
      </div>

      <?php include("footer.php");  ?>
  </body>
</html>
