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
    <h2 class="pb-3">An HTML table is defined with the &lt;table&gt; tag.</h2>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  </div>
    <div class="row">
      <div class="col-md-6 ">
        <a href="<?php echo"image.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
           Previous
        </button></a>
      </div>
      <div class="col-md-6 ">
        <a href="<?php echo"multimedia.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
           Next
        </button></a>
      </div>
    </div>
  </div>
  <?php include("footer.php");  ?>
  </body>
</html>
