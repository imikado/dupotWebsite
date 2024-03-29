<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dupot.org: Arr&ecirc;ter de tourner autour...</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZVG5R211FM"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ZVG5R211FM');
  </script>
  <style>
    .logo {
      background: url('css/images/logo.png') no-repeat 0px center;
      padding-left: 55px;
    }


    #popup {
      position: absolute;
      background: #FFF;
      border: 3px solid #444;
      top: 10px;
      left: 40px;
    }

    #popup a {
      color: white;
    }

    #popup p {
      background: #444;
      margin: 0px;
      text-align: right;
      padding-right: 3px;
    }

    .main {
      min-height: 500px;
    }

    .github {
      background: url("css/images/GitHub-Mark-32px.png") no-repeat center;
      padding: 0px 24px;
    }

    .twitter {
      background: url("css/images/Twitter-social-icons-circle-blue.png") no-repeat center;
      padding: 0px 24px;
    }

    .twitter-repo {
      background: url("css/images/Twitter-social-icons-circle-white.png") no-repeat 10px;
      padding-left: 50px;
    }

    .github-repo {
      background: url("css/images/GitHub-Mark-32px.png") no-repeat 10px #0277bd;
      padding-left: 50px;
    }

    .itchio {
      background: url("css/images/itchio.png") no-repeat center;
      padding: 0px 24px;
    }

    .buttons {
      text-align: center;
    }

    .is-justified {
      text-align: justify;
    }

    .icon-td {
      width: 80px;
    }

    .content-centered {
      text-align: center;
    }

    body {
      background: #fff3e0;
    }

    h1,
    h2 {
      color: #e65100;
    }
  </style>
</head>

<body>

  <?php echo $this->paramList['nav']->render() ?>

  <div class="header">&nbsp;</div>

  <div class="main">
    <div class="container">


      <?php foreach ($this->paramList['contentList'] as $contentLoop) :
        echo $contentLoop->render();
      endforeach; ?>

    </div>

  </div>



  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    (function($) {
      $(function() {
        $('.sidenav').sidenav();
      }); // end of document ready
    })(jQuery);
  </script>


</body>

</html>