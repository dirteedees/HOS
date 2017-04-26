
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hit or Shit</title>

    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Bootstrap -->
    <link href="js/bootstrap.min.js" rel="script">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--my css-->
    <link href="css/hos.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <link href="fonts/gameover.ttf" rel="stylesheet" type="text/css">

</head>

<body>
  <!-- for loop changes the laft nav buttons color "randomly"-->
  <script>
      function rngcolor() {
          var buttons = ['reviews', 'bios', 'hofs', 'pastp','forum'];
          for (var i = 0; i < buttons.length; i++) {
              var buttonToChange = document.getElementById(buttons[i]);

              var colors = ['#46B040', '#3E5792', '#D74E52', '#D9D84F'];

              /*
                you might could use Window.getComputedStyle() to programmaticaaly
                get the current background of the button
                see: https://developer.mozilla.org/en-US/docs/Web/API/Window/getComputedStyle
              */
              var buttonCurrentBG = '#DAA520';

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
    <!--twitter btn script-->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <nav class="navbar navbar-inverse tnavbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active" id="NavHome"><a href="index.php">Home</a></li>
                    <li class="active" id="NavTech"><a href="tech.php">Tech</a></li>
                    <li class="active" id="NavGames"><a href="Games_header.php">Games</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
          <!-- left nav-->
            <div class="col-sm-2 sidenav">
               <!--left nav buttons-->
              <div class="mobilebuttons">
                <div class="center-block btn-group-vertical" role="group" aria-label="...">
                <a class="btn btn-default btn-lg btn" id="reviews" onmouseover="rngcolor();" href="reviews.php" role="button">Reviews</a>
                <a class="btn btn-default btn-lg btn" id="bios" onmouseover="rngcolor();" href="bios.php" role="button">Bios</a>
                <a class="btn btn-default btn-lg btn" id="hofs" onmouseover="rngcolor();" href="Hall_of_shame-fame.html" role="button">Hall of Fame-Shame</a>
                <a class="btn btn-default btn-lg btn" id="pastp" onmouseover="rngcolor();" href="pastpicks.php" role="button">Past Picks</a>
                <!--  <a class="btn btn-lg tbtn" disabled="disabled" id="forum" onmouseover="rngcolor();" href="#" role="button">Forum (coming soon)</a> -->
                </div>
              </div>
                 <!--pook's pick-->
                <div class="pookspick">
                    <p class="text-center ">Pook's Pick</p>
                    <br>
                    <!-- POOKS PIC PATH AND POSTER BELOW-->
                        <img class="img-responsive center-block" src="" id="pppic"  alt="pppic">

<?php
require('header.php');
require('nav.php');
require('pooks_pick.php');
require('center_panel.php');
?>
<!-- short review tabs-->
<div class="container-fluid shorts" id="shorts">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        <img src=""  alt="">
                            <!--Reviewer avi PICTURE LINE ABOVE-->
                            <!--MOVIE TITLE GOES HERE -->
                            <!--Rating img lin below-->
                            <img src="" width="3%">

                    </a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <!--movie poster line  below-->
                    <img src="" alt="POSTER" width="15%">
                    <p class="collapsetext"><!--SHORT REVIEWS HERE!!!!!!!!!!!!!!!!!!!!!-->
                        <a href=""<!--FULL REVIEW PATH HERE-->
                            <h4>Full Review</h4>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('footer.php');?>
</body>

</html>
