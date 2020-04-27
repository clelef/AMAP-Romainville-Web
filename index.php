<!DOCTYPE HTML>
<html lang="fr">
	<head>
        <meta charset="utf-8" />
		<title>Pépins Punks</title>
	</head>
	<body>

    <header>
		<h1><a href="?page=accueil" id="logo">Les Pépins Punks</a></h1>
        <nav id="nav">
            <a href="?page=accueil">Accueil</a>
            <a href="?page=apropos">C'est quoi ?</a>
            <a href="?page=lesrecettes">Nos recettes</a>
            <a href="?page=blog">Le blog</a>
            <a href="?page=contact">Nous contacter</a>
            <a href="?page=adh">Espace Adherent</a>
        </nav>
    </header>

    <main>
        <?php   
            $catOK = array(
            'accueil' => 'pages/accueil.php',
            'contact' => 'pages/contact.php',
            'lesrecettes' => 'pages/recette.php',
            'recette' => 'pages/recettePage.php',
            'apropos' => 'pages/apropos.php',
            'ressource' => 'pages/ressource.php',

            'adherent' => 'pages/adherent.php',
            'postrecette' => 'pages/adherent_PostRecette.php',
            'editpage' => 'pages/adherent_editpage.php',
            'panier' => 'pages/adherent_panier.php',
            );

            if ((isset($_GET['page'])) && (isset($catOK[$_GET['page']])))
            {include($catOK[$_GET['page']]);}
            else
            {include('page/accueil.php'); }
        ?>
    </main>

    <footer>
		Pied de page <a href="#" id="logo">Des amis</a>
    </footer>

	</body>
</html>