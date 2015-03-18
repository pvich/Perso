<?php
	session_start();
	/* analyse de la page demandée et création des variables */
	require("includes/db_connect.php");
	$page = (isset($_GET['page']) ? $_GET['page'] : "home");
	require("includes/functions.php");
	print_r($db);
	
	$montrerHtml = true;
	switch ($page) {
		case "register":
			$titre = "Formulaire d'enregistrement";
			include("includes/pages/register.php");
			break;
		case "register_traitement":
			include("includes/pages/register_traitement.php");
			$montrerHtml = false;
			break;
		case "article_read":
			$titre = "Lecture d'un article";
			include("includes/pages/article_read.php");
			break;
		case "article_list":
			$titre = "affichage article";
			include("includes/pages/article_list.php");
			break;
		case "article_edit":
			// $titre = "creer un article";
			include("includes/pages/article_edit.php");
			break;
		case "article_delete":
			// $titre = "supprimer un article";
			include("includes/pages/article_delete.php");
			break;
		case "home";
		default:
			$titre = "Page d'accueil";
			include("includes/pages/home.php");
			break;
	}
	if ($montrerHtml) {		// si cette page a un affichage graphique, tout inclure, sinon juste un script
		include("includes/blocs/header.php");	// le header contient le début de la page jusqu'à la balise <body>
		include("includes/blocs/menu.php");		// le menu est composé de la balise <nav> et de ses items
			/* début corps de page */
			// on affiche les messages éventuels
		showMessages();		// on affiche le contenu principal de la page
			// include($pageInclue);	/* fin corps de page */	// on affiche le footer et on ferme la page html
		include("includes/blocs/footer.php");
	} else {
		include($pageInclue);	// on inclut le script demandé
	}

/*

include('includes/blocs/head.php');
include('includes/fonctions.php');
include('includes/blocs/menu.php');
if (isset($_SESSION['messages'])) {		// on test l'existence de messages
	foreach ($_SESSION['messages'] as $msg) {  // on affiche un bloc pour chaque message
		switch($msg['code']){
			case 0:
				echo '<p class=message-valid>'.$msg['type'].' * '.$msg['code'].' * '.$msg['lib']. "</p>\n";
				Break;
			case 1:
				echo '<p class=message-info>'.$msg['type'].' * '.$msg['code'].' * '.$msg['lib']. "</p>\n";
				Break;
			case 2:
				echo '<p class=message-error>'.$msg['type'].' * '.$msg['code'].' * '.$msg['lib']. "</p>\n";
				Break;

		}
	}
	unset($_SESSION['messages']);		// du coup on peut supprimer les messages		
}

if (!isset($_GET['page'])) {		// on test l'existence de page
$page="";
}
else{
	$page=$_GET['page'];
}
switch($page){
	case "register":
		include('includes/pages/register.php');
		break;
	case "register_traitement":
		include('includes/pages/register_traitement.php');
		break;

	default:
		include('includes/pages/home.php');
		break;
}
*/
include('includes/blocs/foot.php');	