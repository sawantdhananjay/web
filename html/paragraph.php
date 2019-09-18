<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>paragraph in html</title>
  </head>
  <body>

    <div class="container">
      <h1 class="text-center">How to display paragraph in web</h1>
      <h2 class="text-center">paragraph in html</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="row">
        <div class="col-md-6 ">
          <a href="<?php echo"heading.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
             Previous
          </button></a>
        </div>
        <div class="col-md-6 ">
          <a href="<?php echo"element.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
             Next
          </button></a>
        </div>
      </div>
    </div>


    <?php include("footer.php");  ?>
  </body>
</html>
