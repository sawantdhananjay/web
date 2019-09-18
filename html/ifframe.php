<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="text-center mt-2 mb-2">
        <h2 class="pb-2">An iframe is used to display a web page within a web page. like facebook page, google map etc</h2>
        <iframe src="index.php" height="400" width="900"></iframe>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <a href="<?php echo"hyperlink.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
             Previous
          </button></a>
        </div>
        <div class="col-md-6 ">
            <a href="<?php echo"image.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
           Next
          </button></a>
        </div>
      </div>
    </div>

    <?php include("footer.php");  ?>
  </body>
</html>
