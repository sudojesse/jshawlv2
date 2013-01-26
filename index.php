<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <script type="text/javascript" src="//use.typekit.net/nwv6kix.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <link rel="stylesheet" href="styles.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

       

        <div class='first'>
            <header>
                <h1>Jesse Shawl</h1>
            </header>
            <span class='circles'>
                <span class='circle--1 light'>
                    <span>is a front end</span>
                    <span class='smiley'>:)</span>
                    <span class='upper boldest'>web developer</span>
                </span>
                <span class='circle--2 light'>
                    <span>&amp; web development</span>
                    <span class='upper boldest'>consultant</span>
                </span>
            </span> <!-- ends .circles -->
        </div><!-- ends first -->

        <div class='second'>
            <div id='heart'><p>Loves the web</p></div>
        </div>

         <div class='third' id='three'>
            <h2>Recent Achievements:</h2>
            <ul>
                <li><a href='#'>1/27 Launched christopherbaer.com</a></li>
                <li><a href='#'>Article on HTML5 history API posted on CSS-Tricks</a></li>
                <li><a href='#'>Launched speedycarrental.net</a></li>
            </ul>
        </div>

        <?php 
            echo '<pre>';
            print_r($_REQUEST);
        ?>
    

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
