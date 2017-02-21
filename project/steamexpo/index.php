<?php $root = $_SERVER["DOCUMENT_ROOT"]; ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include($root . "/inc/components/head.php"); ?>
    <title>S.T.E.A.M. EXPO - Jose Rodriguez-Rivas Senior Portfolio</title>
    <style media="screen">
      #gameWrapper {
        margin-bottom: 20px;
        display: none;
      }
      .gal-img {
        cursor: pointer;
      }
    </style>
  </head>
  <body>

    <?php include($root . "/inc/components/header.php"); ?>

    <section>
      <div class="container" id="main-container">
        <div class="row">
          <div class="col-xs-12">
            <h1>S.T.E.A.M. EXPO Booth</h1>
            <p>
              Orthographic was featured at Santa Susana High School's <a href="http://www.sshssteamexpo.com/" target="_blank">S.T.E.A.M. EXPO</a>. S.T.E.A.M. stands for Science, Technology, Engineering, Art, and Math. S.E.A.M. is a variation of S.T.E.M. which does not include art.
            </p>
            <h2>Presentaion</h2>
            <p>
              The following presentation was displayed on loop next to the demo below.
            </p>
            <div id="presentation" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#presentation" data-slide-to="0" class="active"></li>
                <li data-target="#presentation" data-slide-to="1"></li>
                <li data-target="#presentation" data-slide-to="2"></li>
                <li data-target="#presentation" data-slide-to="3"></li>
                <li data-target="#presentation" data-slide-to="4"></li>
                <li data-target="#presentation" data-slide-to="5"></li>
                <li data-target="#presentation" data-slide-to="6"></li>
                <li data-target="#presentation" data-slide-to="7"></li>
                <li data-target="#presentation" data-slide-to="8"></li>
                <li data-target="#presentation" data-slide-to="9"></li>
                <li data-target="#presentation" data-slide-to="10"></li>
                <li data-target="#presentation" data-slide-to="11"></li>
                <li data-target="#presentation" data-slide-to="12"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active"><img src="/img/orthographicpresentation/Slide1.PNG" alt="Presentation Slide 1" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide2.PNG" alt="Presentation Slide 2" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide3.PNG" alt="Presentation Slide 3" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide4.PNG" alt="Presentation Slide 4" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide5.PNG" alt="Presentation Slide 5" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide6.PNG" alt="Presentation Slide 6" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide7.PNG" alt="Presentation Slide 7" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide8.PNG" alt="Presentation Slide 8" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide9.PNG" alt="Presentation Slide 9" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide10.PNG" alt="Presentation Slide 10" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide11.PNG" alt="Presentation Slide 11" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide12.PNG" alt="Presentation Slide 12" class="img-responsive"></div>
                <div class="item"><img src="/img/orthographicpresentation/Slide13.PNG" alt="Presentation Slide 13" class="img-responsive"></div>
              </div>
              <a href="#presentation" class="carousel-control left" role="button" data-slide="prev">
                <span class="fa fa-arrow-left"></span>
                <span class="sr-only"></span>
              </a>
              <a href="#presentation" class="carousel-control right" role="button" data-slide="next">
                <span class="fa fa-arrow-right"></span>
                <span class="sr-only"></span>
              </a>
            </div>
            <h2>Demo</h2>
            <p>
              Vistors of the S.T.E.A.M. EXPO were able to play the following demo at the booth.
            </p>
            <div class="embed-responsive embed-responsive-4by3" id="gameWrapper">
              <iframe src="" id="demoFrame" class="embed-responsive-item"></iframe>
            </div>
            <button class="btn btn-success" id="loadDemoBtn"><i class="fa fa-gamepad fa-fw"></i>&nbsp;Load Demo</button>&nbsp;<button class="btn btn-primary" id="dlDemoBtn"><i class="fa fa-download fa-fw"></i>&nbsp;Download Demo</button>
            <h2>Gallery</h2>
            <div class="row">
              <div class="col-xs-6">
                <img src="/img/steam_booth_1.jpg" alt="Steam Expo Booth" class="img-responsive gal-img">
              </div>
              <div class="col-xs-6">
                <img src="/img/steam_booth_2.jpg" alt="Jos&eacute; Next to Booth" class="img-responsive gal-img">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="galmodal" tabindex="-1" role="dialog" aria-labelledby="#galmodalTitle">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aira-label="Close">
                <span aria-hidden="true"><i class="fa fa-close"></i></span>
              </button>
              <h3 class="modal-title" id="galmodalTitle"></h3>
            </div>
            <div class="modal-body">
              <img src="" alt="" class="img-responsive" id="galmodalimg">
            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include($root . "/inc/components/js.php"); ?>
    <script>
      $("#loadDemoBtn").click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $("#gameWrapper").slideDown('400', function() {
          $("#demoFrame").attr("src", "/files/Orthographic_Demo_Web/www/index.html");
            $('html, body').animate({
                scrollTop: $("#demoFrame").offset().top - 20
            }, 500);
        });
        $(this).blur();
      });
      $("#dlDemoBtn").click(function(event) {
        /* Act on the event */
        event.preventDefault();
        window.location.href = "/files/InstallOrthographicDemo.exe";
      });
      $(".gal-img").click(function(event) {
        /* Act on the event */
        $("#galmodalTitle").html($(this).attr('alt'));
        $("#galmodalimg").attr('src', $(this).attr('src'));
        $("#galmodalimg").attr('alt', $(this).attr('alt'));
        $("#galmodal").modal();
      });
    </script>
  </body>
</html>
