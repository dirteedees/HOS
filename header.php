<!--This php module calls all of the css and js, fonts for the Hit or Shit site
 This must be called for ALL PAGES  -->
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
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
  </script>
</head>
<body>
