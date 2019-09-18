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
    <h2 class="pb-3">Form Element</h2>
    <input name="firstname" type="text">
    <br>
      <select name="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
    <br>

<br>
<textarea name="message" rows="10" cols="30">
The cat was playing in the garden.
</textarea>
<br>
<input type="radio" name="gender" value="male" checked> Male<br>
 <input type="radio" name="gender" value="female"> Female<br>
 <select name="cars" size="4" multiple>
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="fiat">Fiat</option>
<option value="audi">Audi</option>
</select>
  </div>

    <div class="row">
      <div class="col-md-6 ">
        <a href="<?php echo"multimedia.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
           Previous
        </button></a>
      </div>
      <div class="col-md-6 ">
        <a href="<?php echo"marquee.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
           Next
        </button></a>
      </div>
    </div>
  </div>
  <?php include("footer.php");  ?>
  </body>
</html>
