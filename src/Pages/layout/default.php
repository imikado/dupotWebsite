<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dupot.org: Arr&ecirc;ter de tourner autour...</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/theme.css">

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
</head>

<body>

  <?php echo $this->paramList['nav']->render() ?>

  <div class="main">
    <div class="container">

      <?php foreach ($this->paramList['contentList'] as $contentLoop) :
        echo $contentLoop->render();
      endforeach; ?>

    </div>
  </div>

  <footer class="site-footer">
    <div class="container">dupot.org &mdash; jeux &amp; applications opensource</div>
  </footer>

  <script src="js/nav.js"></script>
  <script src="js/gallery.js"></script>

</body>

</html>
