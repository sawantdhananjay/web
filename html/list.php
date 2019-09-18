<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List</title>
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-6">
          <ul>
            <h2>Unorderd List</h2>
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ol>
            <h2>Orderd List</h2>
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 ">
          <a href="<?php echo"element.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
             Previous
          </button></a>
        </div>
        <div class="col-md-6 ">
          <a href="<?php echo"attribute.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
             Next
          </button></a>
        </div>
      </div>
    </div>
    <?php include("footer.php");  ?>
  </body>
</html>
