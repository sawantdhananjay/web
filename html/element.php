<?php include("header.php");  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Element Formating in Html</title>
  </head>
  <body>
    <div class="container">
      <div class="text-center mt-5" style="font-size:22px;">
        <b>Bold the text</b> <br>
        <strong>Important text</strong> <br>
        <i>Italic text</i> <br>
        <em> Emphasized text</em> <br>
        <mark>Marked text</mark> <br>
        <small>Small text</small> <br>
        <del>Deleted text</del> <br>
        <ins>Inserted text</ins> <br>
        <sub>Subscript text</sub> <br><br>
        <sup>Superscript text</sup> <br><br>
        <q> Browsers usually insert quotation marks around the q element</q>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <a href="<?php echo"paragraph.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct">
             Previous
          </button></a>
        </div>
        <div class="col-md-6 ">
            <a href="<?php echo"list.php"; ?>"><button type="button" class="btn btn-outline-secondary btn-direct float-right">
           Next
          </button></a>
        </div>
      </div>
    </div>

  <?php include("footer.php");  ?>
  </body>
</html>
