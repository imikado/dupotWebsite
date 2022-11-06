<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Arr&ecirc;ter de tourner autour...</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />

  <style>
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
      background: url("css/images/GitHub-Mark-32px.png") no-repeat 10px;
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
  </style>
</head>

<body>
  <?php echo $this->paramList['nav']->render() ?>

  <section class="section">
    <div class="container"><?php foreach ($this->paramList['contentList'] as $contentLoop) :
                              echo $contentLoop->render();
                            endforeach; ?></div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(
        document.querySelectorAll(".navbar-burger"),
        0
      );

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {
        // Add a click event on each of them
        $navbarBurgers.forEach((el) => {
          el.addEventListener("click", () => {
            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle("is-active");
            $target.classList.toggle("is-active");
          });
        });
      }
    });
  </script>
</body>

</html>