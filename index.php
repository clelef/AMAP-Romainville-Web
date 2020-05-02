<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Pépins Punks</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="asset/ico.png" />
  <script type="text/javascript" src="asset/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="asset/pagination_js/pagination.js"></script>
  <link href="asset/pagination_js/pagination.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="logoPepinsPunk"></div>
  <div class="wrapper">
    <header class="header"></header>
    <section class="content">
      <aside class="sidebar-Menu">
        <br>
        <div class="menu">
          <input class="burger" type="checkbox">
          <nav>
            <br>
            <div class="center-div">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">🔒 Se déconnecter</a>
              <ul id="navigation">
                <li class="point1"><a href="?page=accueil">Pourquoi une AMAP</a></li>
                <li class="point1"><a href="?page=accueil#acc2">Qu'est ce que c'est ?</a></li>
                <li class="point1"><a href="?page=accueil#acc3">Nos copains</a></li>
                <li class="point4"><a href="?page=lesrecettes">Nos recettes</a></li>
                <li class="point2"><a href="?page=blog">Articles</a></li>
              </ul>
              <ul id="navigation">
                <li class="point3"><a href="?page=adh">Distribution</a></li>
                <li class="point3"><a href="?page=adh">Paniers</a></li>
                <li class="point3"><a href="?page=adh">Documentation</a></li>
              </ul>
              <ul id="navigation">
                <li class="point1"><a href="?page=contact">Contactez-nous</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </aside>

      <?php
      $catOK = array(
        'accueil' => 'pages/accueil.php',
        'lesrecettes' => 'pages/lesrecettes.php',
        'blog' => 'pages/blog.php',
        'adh' => 'pages/adherent.php',
        'contact' => 'pages/contact.php',

        'recette' => 'pages/recette.php',
      );

      if ((isset($_GET['page'])) && (isset($catOK[$_GET['page']]))) {
        include($catOK[$_GET['page']]);
      } else {
        include('pages/accueil.php');
      }
      ?>

    </section>
    <footer class="footer">
      <table cellpadding=2 cellspacing=2>
        <tr>
          <td>Nous contactez</td>
          <td>Distributions</td>
        </tr>
      </table>
    </footer>
  </div>
</body>

</html>