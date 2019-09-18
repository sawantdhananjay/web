<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hyperlink</title>
  </head>
  <body>
    <div class="container">
      <div class="text-center mt-5">
        <h2>You can click on a link and jump to another document.</h2>
        <a href="index.php">Index Page Link</a>
        <h4>The target attribute can have one of the following values:</h4>
      <p>  _blank - Opens the linked document in a new window or tab</p>
      <a href="index.php" target="_blank">Index Page Link</a>
      <p>  _self - Opens the linked document in the same window/tab as it was clicked (this is default)</p>
      <a href="index.php" target="_self">Index Page Link</a>
    <p>    _parent - Opens the linked document in the parent frame</p>
    <a href="index.php" target="_parent">Index Page Link</a>
    <p>    _top - Opens the linked document in the full body of the window</p>
    <a href="index.php" target="_top">Index Page Link</a>
    <p>    framename - Opens the linked document in a named frame</p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <a href="<?php echo"attribute.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
             Previous
          </button></a>
        </div>
        <div class="col-md-6 ">
            <a href="<?php echo"ifframe.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
           Next
          </button></a>
        </div>
      </div>
    </div>
<?php include("footer.php");  ?>
  </body>
</html>
