<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>skeletol of Html</title>
  </head>
  <body>

<div class="container">
<div style="font-size:24px;">

<div class="text-left">



        <?php
        $space="";
        echo htmlentities("<!DOCTYPE html>");
        echo "<br>";
        echo htmlentities("<html>");
        echo "<br>";
        echo htmlentities("<head>");
        echo "<br>";
        echo htmlentities("<meta>");
        echo "<br>";
        echo htmlentities("<title></title>");
        echo "<br>";
        echo htmlentities("</head>");
        echo "<br>";
        echo htmlentities("<body>");
        echo "<br>";

        echo htmlentities("</body>");
        echo "<br>";
      echo htmlentities("</html>");
      echo "<br>";
        ?>

        </div>
        <div class="row">
          <div class="col-md-6 ">
            <a href="<?php echo"index.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
               Previous
            </button></a>
          </div>
          <div class="col-md-6 float-right">
            <a href="<?php echo"heading.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
               Next
            </button></a>
          </div>
        </div>

</div>
</div>
<?php include("footer.php");  ?>
  </body>
</html>
