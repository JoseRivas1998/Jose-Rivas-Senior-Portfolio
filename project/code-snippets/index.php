<?php $root = $_SERVER["DOCUMENT_ROOT"]; ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include($root . "/inc/components/head.php"); ?>
    <title>Code Snippets - Jose Rodriguez-Rivas Senior Portfolio</title>
    <link rel="stylesheet" href="/css/prism.css">
    <style media="screen">
      pre {
        overflow: hidden;
      }
      .affix {
        top: 20px;
      }
    </style>
  </head>
  <body data-spy="scroll" data-target="#sideNav" data-offset="15">

    <?php include($root . "/inc/components/header.php"); ?>

    <section>
      <div class="container" id="main-container">
        <div class="row">
          <div class="col-xs-12 col-sm-9">
            <h1>Code Snippets</h1>
            <h2 id="abouth2">About</h2>
            <p>
              RPG Maker MV games are made in javascript, and all though the base engine is comes prebuilt, it allows developers to write their own scripts, or "plugins", adding their own functionality to their games. Alongside with developing Orthographic, Jose also built the TCG RPG Maker MV Plugin Library. The TCG RPG Maker MV Plugin Library includes all the plugins that Jose used in the project. The library is open source, and is availabe to any other RPG Maker MV developer. The public version of the libary can be found at <a href="https://tinycountrygames.com/plugins/" target="_blank">https://tinycountrygames.com/plugins/</a>.
            </p>
            <h2 id="splashScreen">TCG Splash Screen Plugin</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, blanditiis excepturi deserunt optio velit dolorum veritatis ducimus eos magni ab.
            </p>
            <pre class="line-numbers" id="TCGSplashScreen"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGSplashScreen.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGSplashScreen" data-open="false">Toggle Code</button>
            <h2 id="splashScreenMovie">TCG Splash Screen Movie Plugin</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, blanditiis excepturi deserunt optio velit dolorum veritatis ducimus eos magni ab.
            </p>
            <pre class="line-numbers" id="TCGSplashScreenMovie"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGSplashScreen_Movie.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGSplashScreenMovie" data-open="false">Toggle Code</button>
            <h2 id="dayNight">TCG Day Night Plugin</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, blanditiis excepturi deserunt optio velit dolorum veritatis ducimus eos magni ab.
            </p>
            <pre class="line-numbers" id="TCGDayNight"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGDayNight.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGDayNight" data-open="false">Toggle Code</button>
            <h2 id="overworldareas">TCG Overworld Areas Plugin</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, blanditiis excepturi deserunt optio velit dolorum veritatis ducimus eos magni ab.
            </p>
            <pre class="line-numbers" id="TCGOverworldAreas"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGOverworldAreas.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGOverworldAreas" data-open="false">Toggle Code</button>
            <h2 id="startinfullscreen">TCG Start in Fullscreen Plugin</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, blanditiis excepturi deserunt optio velit dolorum veritatis ducimus eos magni ab.
            </p>
            <pre class="line-numbers" id="TCGStartInFullScreen"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGStartInFullScreen.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGStartInFullScreen" data-open="false">Toggle Code</button>
            <h2 id="dungeons">TCG Dungeons Plugin</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, blanditiis excepturi deserunt optio velit dolorum veritatis ducimus eos magni ab.
            </p>
            <pre class="line-numbers" id="TCGDungeons"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGDungeons.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGDungeons" data-open="false">Toggle Code</button>
            <h2 id="customtitle">TCG Custom Title Screen Plugin</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, blanditiis excepturi deserunt optio velit dolorum veritatis ducimus eos magni ab.
            </p>
            <pre class="line-numbers" id="TCGCustomTitleScreen"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGCustomTitleScreen.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGCustomTitleScreen" data-open="false">Toggle Code</button>
            <h2 id="controlscreen">TCG Control Screen</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, blanditiis excepturi deserunt optio velit dolorum veritatis ducimus eos magni ab.
            </p>
            <pre class="line-numbers" id="TCGControlScreen"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGControlScreen.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGControlScreen" data-open="false">Toggle Code</button>
          </div>
          <div class="hidden-xs col-sm-3">
            <div class="panel panel-default"  data-spy="affix" data-offset-top="275">
              <div class="panel-heading">
                <div class="panel-title">Navigation</div>
              </div>
              <div class="panel-body">
                <nav id="sideNav">
                  <ul class="nav nav-pills nav-stacked" >
                    <li><a href="#abouth2">About</a></li>
                    <li><a href="#splashScreen">TCG Splash Screen</a></li>
                    <li><a href="#splashScreenMovie">TCG Splash Screen Movie</a></li>
                    <li><a href="#dayNight">TCG Day Night</a></li>
                    <li><a href="#overworldareas">TCG Overworld Areas</a></li>
                    <li><a href="#startinfullscreen">TCG Start in Fullscreen</a></li>
                    <li><a href="#dungeons">TCG Dungeons</a></li>
                    <li><a href="#customtitle">TCG Custom Title Screen</a></li>
                    <li><a href="#controlscreen">TCG Control Screen</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include($root . "/inc/components/js.php"); ?>
    <script src="/js/prism.js"></script>
    <script type="text/javascript">
      $(function() {
        var $affixElement = $('div[data-spy="affix"]');
        $affixElement.width($affixElement.parent().width());
      });
      $('a[href*=\\#]').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 500);
      });

      var minSlideHeight = 250;

      $(document).ready(function() {
        $("pre").each(function(){
          $(this).attr('totalHeight', $(this).height());
          $(this).css('height', minSlideHeight + "px");
          $(this).css('overflow-y', 'hidden')
        });
      });

      $("button").click(function(event) {
        /* Act on the event */
        event.preventDefault();
        var toggleElement = $($(this).data('toggle'));
        var toggleHeight = 0;
        console.log($(this).data('open') + ' ' + !$(this).data('open'));
        if($(this).data('open')) {
          toggleHeight = minSlideHeight;
        } else {
          toggleHeight = toggleElement.attr('totalHeight')
        }
        $(this).data('open', !$(this).data('open'));
        toggleElement.animate({
          height: toggleHeight
        }, 500);
        $(this).blur();
      });

    </script>
  </body>
</html>
