<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attribute</title>
  </head>
  <body>
<div class="container">

  <div class="text-center">
  <div class="row text-center mt-5">
    <h2 class="mb-4 w-100">Attribute</h2>
    <br>
    <p class="w-100"  style="font-size:24px;"><a href="index.php">Home</a> this is hfer Attribute </p>
    <br>
    <p class="w-100"><img src="logo.png" width="100" height="100"> </p><br>
    <p class="w-100"> An image have src, width, height, alt Attribute</p><br>
    <p class="w-100">The style attribute is used to specify the styling of an element, like <span style="color:red;">color</span>, <span style="font-size:24px;">font</span>, size etc.</p>
    <p class="w-100" title="TOOLTIP">ToolTip </p>
  </div>
  </div>

    <div class="row">
      <div class="col-md-6 ">
        <a href="<?php echo"list.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
           Previous
        </button></a>
      </div>
      <div class="col-md-6 ">
          <a href="<?php echo"hyperlink.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
         Next
        </button></a>
      </div>
    </div>
    </div>
    <?php include("footer.php");  ?>
  </body>
</html>
