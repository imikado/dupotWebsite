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
  <link rel="stylesheet" href="css/theme.css?v=<?php echo date('YmdHis') ?>">

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
    <div class="container footer-inner">
      <div class="footer-brand">
        <a href="index.html" class="brand"><span class="brand-mark">d</span>uPot.org</a>
        <p>Jeux &amp; applications opensource, développés avec passion et partagés librement.</p>
      </div>

      <nav class="footer-links" aria-label="Pied de page">
        <a href="<?php echo \MyWebsite\Pages\GamesPage::FILENAME ?>">Jeux</a>
        <a href="<?php echo \MyWebsite\Pages\AppsDestkopPage::FILENAME ?>">Logiciels</a>
        <a href="<?php echo \MyWebsite\Pages\TutorialListPage::FILENAME ?>">Tutos</a>
        <a href="<?php echo \MyWebsite\Pages\AboutPage::FILENAME ?>">A propos</a>
        <a href="https://github.com/imikado" target="_blank">GitHub</a>
        <a href="https://dupot-org.itch.io/" target="_blank">itch.io</a>
      </nav>
    </div>
    <div class="container footer-bottom">&copy; <?php echo date('Y') ?> dupot.org &mdash; site généré avec <a href="https://github.com/imikado/dupotStaticGenerationFramework" target="_blank">dupot/static-generation-framework</a></div>
  </footer>

  <script src="js/nav.js"></script>
  <script src="js/gallery.js"></script>

</body>

</html>