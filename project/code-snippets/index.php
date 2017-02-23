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
              RPG Maker MV games are made in javascript, and all though the base engine is comes prebuilt, it allows developers to write their own scripts, or "plugins", adding their own functionality to their games. Alongside with developing Orthographic, Jose also built the TCG RPG Maker MV Plugin Library. The TCG RPG Maker MV Plugin Library includes all the plugins that Jose used in the project. The library is open source, and is availabe to any other RPG Maker MV developer. The public version of the library can be found at <a href="https://tinycountrygames.com/plugins/" target="_blank">https://tinycountrygames.com/plugins/</a>.
            </p>
            <h2 id="splashScreen">TCG Splash Screen Plugin</h2>
            <p>
              This plugin allows a developer to add text before the title screen of the game appears. The developer may also choose whether or not to skip the text if there is a save file present. During development, RPG Maker MV was updated with a similar plugin included, but this plugin was made before that update.
            </p>
            <pre class="line-numbers" id="TCGSplashScreen"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGSplashScreen.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGSplashScreen" data-open="false">Toggle Code</button>
            <h2 id="splashScreenMovie">TCG Splash Screen Movie Plugin</h2>
            <p>
              Written shortly after the plugin above, this plugin allows developers to play a video file in the splash screen instead of just showing plain text. This allows for animated intros, with their logo, or even include copyright and license information.
            </p>
            <pre class="line-numbers" id="TCGSplashScreenMovie"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGSplashScreen_Movie.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGSplashScreenMovie" data-open="false">Toggle Code</button>
            <h2 id="dayNight">TCG Day Night Plugin</h2>
            <p>
              This plugin allows developers to implement a day and night cycle in their games. A day and night cycle is when a game keeps track of time, changing certain aspects of the game including visuals and gameplay based on what time it is in the game. This day night cycle, as well as those in many other games uses the system time to determine the game's time. Daytime in the real world translates to daytime in the game, as well as sunset and night time. The plugin also allows the developer to check the time of day in standard events, to allow certain events to only happen during certain parts of the day. The developer can also change where the game changes the color of the screen based on time, so places like dungeons or houses seem unaffected by the time. This plugin also adds a clock to the pause screen of the game so the play could know what time it is even in fullscreen.
            </p>
            <pre class="line-numbers" id="TCGDayNight"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGDayNight.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGDayNight" data-open="false">Toggle Code</button>
            <h2 id="overworldareas">TCG Overworld Areas Plugin</h2>
            <p>
              This plugins allows developers to define different areas within one map. RPG Maker MV allows developers to set default music and display name for an entire map, but only allows one per map. If a developer wanted different music to play with a different display name, they would have to use a transfer event to take the player to another map. In open world games, it is common for the music and display name to change as the player traverses the world, and this plugin allows developers to define where the music and display name change.
            </p>
            <pre class="line-numbers" id="TCGOverworldAreas"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGOverworldAreas.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGOverworldAreas" data-open="false">Toggle Code</button>
            <h2 id="startinfullscreen">TCG Start in Fullscreen Plugin</h2>
            <p>
              This plugin allows for developers to start their games in fullscreen automatically. Players would otherwise have to press a key to enter fullscreen. Some developers like to have their games start in fullscreen, especially when they want to publish their game in Steam and Steam Big Picture Mode.
            </p>
            <pre class="line-numbers" id="TCGStartInFullScreen"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGStartInFullScreen.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGStartInFullScreen" data-open="false">Toggle Code</button>
            <h2 id="dungeons">TCG Dungeons Plugin</h2>
            <p>
              This plugin is incomplete in its current state. This plugin allows developers to define which parts of their games are dungeons, that use keys. The title that the developer sets for the dungeon as well as the amount of keys the player has will be displayed in the top left corner of the screen.
            </p>
            <pre class="line-numbers" id="TCGDungeons"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGDungeons.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGDungeons" data-open="false">Toggle Code</button>
            <h2 id="customtitle">TCG Custom Title Screen Plugin</h2>
            <p>
              This plugin is incomplete in its current state. This plugin adds customization to the title screen of games. So far the plugin allows developers to add a credit in the bottom left of their games.
            </p>
            <pre class="line-numbers" id="TCGCustomTitleScreen"><code class="language-javascript"><?php echo htmlspecialchars(file_get_contents("TCGCustomTitleScreen.js")) ?></code></pre>
            <button class="btn btn-default" data-toggle="#TCGCustomTitleScreen" data-open="false">Toggle Code</button>
            <h2 id="controlscreen">TCG Control Screen</h2>
            <p>
              This plugin is incomplete in its current state. This plugin allows the developer to add a screen in the game where the controls are displayed.
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
