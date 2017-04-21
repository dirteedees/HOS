<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hit or shit</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Bootstrap -->
    <link href="js/bootstrap.min.js" rel="script">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--my css-->
    <link href="css/hos.css" rel="stylesheet" type="text/css">
    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <link href="fonts/gameover.ttf" rel="stylesheet" type="text/css">
</head>
<html lang="en">

<body>

    <!--twitter btn-->
    <script>
        ! function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = "//platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, "script", "twitter-wjs");
    </script>
    <!-- for loop changes the laft nav buttons color "randomly"-->
    <script>
        function rngcolor() {
            var buttons = ['newest', 'reviews', 'bios', 'forum', 'hofs', 'pastp'];
            for (var i = 0; i < buttons.length; i++) {
                var buttonToChange = document.getElementById(buttons[i]);

                var colors = ['#46B040', '#3E5792', '#D74E52', '#D9D84F'];

                /*
                	you might could use Window.getComputedStyle() to programmaticaaly
                	get the current background of the button
                	see: https://developer.mozilla.org/en-US/docs/Web/API/Window/getComputedStyle
                */
                var buttonCurrentBG = '#157f0d';

                // Change hover state on mouseenter to random color from list
                buttonToChange.addEventListener('mouseenter', function (e) {

                    // I removed the +1 at the end. I kept getting 'undefined' occasionally when it was still there

                    var random_color = colors[Math.floor(Math.random() * (colors.length))];
                    this.style.backgroundColor = random_color;
                });

                // Change button bg back to what it was before

                buttonToChange.addEventListener('mouseleave', function (e) {
                    this.style.backgroundColor = buttonCurrentBG;
                });
            }
        }
    </script>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="active"><a href="Games_header.html">Games</a></li>
                    <li class="active"><a href="tech.html">Tech</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid ">
        <div id="page" class="row content">

            <!-- left nav-->
            <div class="col-sm-2 sidenav">
                <!--left nav buttons-->
                <div id="mobilebuttons">
                    <div class="center-block btn-group-vertical" role="group" aria-label="...">
                        <a class="btn btn-lg gbtn" disabled="disabled" id="newest" onmouseover="rngcolor();" href="#" role="button">Newest</a>
                        <a class="btn btn-default btn-lg gbtn" id="reviews" onmouseover="rngcolor();" href="" role="button">Reviews</a>
                        <a class="btn btn-default btn-lg gbtn" id="bios" onmouseover="rngcolor();" href="" role="button">Bios</a>
                        <a class="btn btn-lg gbtn" disabled="disabled" id="forum" onmouseover="rngcolor();" href="#" role="button">Forum (coming soon)</a>
                        <a class="btn btn-default btn-lg gbtn" id="hofs" onmouseover="rngcolor();" href="" role="button">Hall of Fame-Shame</a>
                        <a class="btn btn-default btn-lg gbtn" id="pastp" onmouseover="rngcolor();" href="" role="button">Past Picks</a>
                    </div>
                </div>
                <!--pook's pick-->
                <div class="pookspick" id="gpppic">

                    <p class="text-center">Pook's Pick</p>
                    <br>
                    <a href="http://www.imdb.com/title/tt0063850/" target="_blank">
                        <img class=" pppic center-block" src="images/if.jpg" alt="pppic">
                    </a>
                </div>

            </div>

            <!-- center panel-->
            <div class="col-sm-8 text-left">
                <div class="center-block titlebar">
                    <h1 class="text-center title">Hit or Shit </h1>
                    <hr>
                    <div class="hsgbadge">
                        <img class="center-block" src="images/HIT%20or%20SHIT%202.png" alt="hsbadge">
                    </div>
                    <!--twitter button-->
                    <div class=" twitter">
                        <div class="center-block">
                            <a href="https://twitter.com/hitorshitmovies" class="twitter-follow-button" data-show-screen-name="false" data-show-count="true" data-size="medium">Follow </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right panel -->
            <div class="col-sm-2 ">
                <!-- twitter feed -->
                <div id="twit_feed">
                    <h3>Twits</h3>
                    <a class="twitter-timeline" data-width="250" data-height="1000" data-dnt="true" data-chrome="transparent noscrollbar nofooter noheader" data-theme="dark" data-link-color="#1ba611" href="https://twitter.com/hitorshitmovies">Tweets by hitorshitmovies</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>

</html>
