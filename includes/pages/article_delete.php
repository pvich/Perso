<?php
// on regarde si un ID a été fourni
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$valid = isset($_GET['valid']) ? (int)$_GET['id'] : 0;
if(!$valid){
	echo"Etes vous sur de vouloir supprimer cet article ? <a href=\"index.php?page=article_delete&valid=OUI\"> OUI </a><a href=\"index.php?page=article_delete&valid=NON\"> NON </a>";

	if ($id>0) {
		$sql = "DELETE * FROM article WHERE id=".$id;
		$statement = $db->query($sql);
		if ($article = $statement->fetch()) {
			// notre article est supprimé
		}
		else {
			addMessage(0,"error","Aucun article trouvé avec cet identifiant.");
			header("Location: index.php");
		}
	}
}

	/*
$id=isset($_GET['id']) ? (int)$_GET

		if (isset($_POST['submit'])){
			echo"passage";
			$sql="INSERT INTO article (title, content) VALUES (:title, :content)";
			$statement = $db->prepare($sql);
			$statement->bindParam(":title", $_POST['title']);
			$statement->bindParam(":content", $_POST['content']);
			
			$result = $statement->execute();
			
			addMessage(0,"valid", "Votre article a bien été inséré");
			header("location: index.php");
		}
		else{
			?>
		<form method="post" action="" enctype="multipart/form-data">
			<h2>Formulaire d'ajout article</h2>
			<fieldset>
				<label>titre : 
					<input type="text" name="titre" placeholder="Veuillez saisir le titre de l'article" required title="Ici le titre de l'article">
				</label><br>
				<label>Content :
					<textarea name="content"></textarea>
				</label><br>
			</fieldset>
			<input type="submit" value="enregistrer" name="submit">

			</form>
			<?php
		}

	
	 include('includes/blocs/footer.php);
*/		
