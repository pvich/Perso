<?php
addMessage(0,"valid","Votre inscription a bien été prise en compte.");
if ($_FILES['photo_profil']['error']==UPLOAD_ERR_OK) {
	
	$uploaddir = 'images/';		// on définit le chemin final du fichier une fois déplacé
	$uploadfile = $uploaddir . basename($_FILES['photo_profil']['name']);
	$autorises = array('gif','png' ,'jpg');		// on peut vérifier l'extension du fichier - tableau regroupant les extensions autorisées
	$nomFichier = $_FILES['photo_profil']['name'];	// on récupère le nom original du fichier
	$ext = strtolower(pathinfo($nomFichier, PATHINFO_EXTENSION));		// on extrait l'extension à partir du nom du fichier
	if(!in_array($ext,$autorises) ) {		// on regarde si l'extension est autorisée
		addMessage(1,"error","Extension non autorisée.");
	} else {
		if (move_uploaded_file($_FILES['photo_profil']['tmp_name'], $uploadfile)) {		// on tente de déplacer le fichier vers son emplacement final - si ca marche, on prévient l'utilisateur
			addMessage(0,"valid","Le fichier est valide, et a été téléchargé avec succès.");
		} else { 		// sinon on affiche le code erreur
			addMessage(2, "error", "Erreur détectée.");
		}
	}
}
header("Location: index.php");