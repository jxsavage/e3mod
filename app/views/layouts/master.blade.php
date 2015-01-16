<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E3 Modern</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/e3transparent.png">
    <!--<link rel="stylesheet" href="/app/bower_components/html5-boilerplate/css/normalize.css">
    <link rel="stylesheet" href="/app/bower_components/html5-boilerplate/css/main.css">-->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.css">-->
<!--    <script src="/app/bower_components/html5-boilerplate/js/vendor/modernizr-2.6.2.min.js"></script>-->
    <link rel="stylesheet" href="/css/app.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body class="landing-page">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img class="nav-image" src="/img/e3transparent.png" alt="E3 Modern"/></a>
                
            </div>
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a id="home-nav" href="/gallery" role="button">Gallery</a>
                    </li>
                    <li>
                        <a id="about-nav" href="/about" role="button">About&nbsp;Us</a>
                    </li>
                    <li>
                        <a id="press-nav" href="/press" role="button">Press</a>
                    </li>
                    <li>
                        <a id="services-nav" href="/services" role="button">Services</a>
                    </li>
                    <li>
                        <a id="blog-nav" href="/blog" role="button">Blog</a>
                    </li>
                    <li>
                        <a id="events-nav" href="/events" role="button">Events</a>
                    </li>
                    <li>
                        <a id="photo-nav" href="/photo-gallery" role="button">Photo&nbsp;Gallery</a>
                    </li>
                    <li>
                        <a id="location-nav" href="/map" role="button">Map</a>
                    </li>
                    <li>
                        <a id="contact-nav" href="/contact" role="button">Contact&nbsp;Us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="/boozetique"  role="button"><span class='pink-booze'>Shop @ The Boozetique</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/E3Modern" role="button"><img src="/img/fb-icon.png" alt="E3 Modern Facebook"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/E3Mod" role="button"><img src="/img/twitter-icon.png" alt="E3 Modern Facebook"></a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    @yield('content')
    <div class='container'>
        <div class="row">
            <footer class="col-md-8 col-md-offset-2 footer">
                <span>Address: 315 East Broadway, Salt Lake City, UT 84111 | Telephone: (801) 363-3939 | Hours: 11AM - 7PM Mon-Sat</span>
            </footer>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="/js/bootstrap.js"></script>
    
</body>
</html>
