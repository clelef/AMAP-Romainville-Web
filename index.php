<!DOCTYPE HTML>
<html lang="fr">
	<head>
        <meta charset="utf-8" />
		<title>Pépins Punks</title>
	</head>
	<body>

    <header>
		<h1>Les Pépins Punks</h1>
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
            'apropos' => 'pages/apropos.php',
            'lesrecettes' => 'pages/lesrecettes.php',
            'blog' => 'pages/blog.php',
            'contact' => 'pages/contact.php',
            'adh' => 'pages/adherent.php',

            'recette' => 'pages/recette.php',
            );

            if ((isset($_GET['page'])) && (isset($catOK[$_GET['page']])))
            {include($catOK[$_GET['page']]);}
            else
            {include('pages/accueil.php'); }
        ?>
    </main>

    <footer>
        <br><br>
		Pied de page <a href="#" id="logo">Des amis</a>
    </footer>

	</body>
</html>