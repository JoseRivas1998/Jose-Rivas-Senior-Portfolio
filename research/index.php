<?php $root = $_SERVER["DOCUMENT_ROOT"]; ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include($root . "/inc/components/head.php"); ?>
    <title>Research Paper - Jose Rodriguez-Rivas Senior Portfolio</title>
  </head>
  <body>

    <?php include($root . "/inc/components/header.php"); ?>

    <section>
      <div class="container" id="main-container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Research paper</h1>
            <object data="Senior_Project_Research_Paper.pdf" id="paper" type="application/pdf" width="100%">
              <strong>Error:</strong> Your browser does not support pdf files. Please download <a href="Senior_Project_Research_Paper.pdf">Senior_Project_Research_Paper.pdf</a> to read the paper.
            </object>
          </div>
        </div>
      </div>
    </section>

    <?php include($root . "/inc/components/js.php"); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#paper").height($(window).height() - $('#top-navbar').height());
      });
    </script>
  </body>
</html>
