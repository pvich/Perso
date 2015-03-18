<?php
	// on récupère l'id de l'article à travers la var GET
	$id = isset($_GET['id'])?(int)$_GET['id'] : 0;
?>
<h2>Lecture d'un article</h2>

<?php
	$sql="SELECT * FROM article WHERE id=".$id.';charset=UTF-8';
	// echo $sql."<br>";
	$statement = $db->query($sql);
	/*
		echo "<pre>";
		print_r($statement);
		echo"</pre>";
	*/
	if(
		$article = $statement->fetch()){
		/*echo "<pre>";
		print_r($article);
		echo"</pre>";
		*/
		?>
		<article id="<?php echo $article['id']; ?>">
		<h1><?php echo $article['title'];?></h1>
		<p><?php echo nl2br( $article['content']) ?></p>
		</article>

		<?php
	}
	else{
		echo"Pas d'article";
	}