<!DOCTYPE HTML>
<html lang="fr">
	<head>
        <meta charset="utf-8" />
		<title>Pépins Punks</title>
	</head>
	<body>

		<h1><a href="?page=accueil" id="logo">Les Pépins Punks</a></h1>

        <nav id="nav">
            <a href="?page=accueil">Accueil</a>
            <a href="?page=apropos">C'est quoi ?</a>
            <a href="?page=lesrecettes">Nos recettes</a>
            <a href="?page=blog">Le blog</a>
            <a href="?page=contact">Nous contacter</a>
            <a href="?page=adh">Espace Adherent</a>
        </nav>

        <?php   
            $catOK = array(
            'accueil' => 'page/accueil.php',
            'contact' => 'page/contact.php',
            'lesrecettes' => 'page/recette.php',
            'recette' => 'page/recettePage.php',
            'apropos' => 'page/apropos.php',
            'ressource' => 'page/ressource.php',

            'adherent' => 'page/adherent.php',
            'postrecette' => 'page/adherent_PostRecette.php',
            'editpage' => 'page/adherent_editpage.php',
            'panier' => 'page/adherent_panier.php',
            );

            if ((isset($_GET['page'])) && (isset($catOK[$_GET['page']])))
            {include($catOK[$_GET['page']]);}
            else
            {include('page/accueil.php'); }
        ?>

	</body>
</html>