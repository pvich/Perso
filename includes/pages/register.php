<form method="post" action="index.php?page=register_traitement" enctype="multipart/form-data">
	<h2>Formulaire d'enregistrement</h2>
	<fieldset>
		<legend>Etat civil</legend>
		<label>Titre :
					<select name="titre">
						<option value="mr">M.</option>
						<option value="mme">Mme</option>
						<option value="mlle">Mlle</option>
					</select>
				</label><br>
				<label>Nom : 
					<input type="text" name="nom" placeholder="Veuillez saisir votre nom" required title="Ici votre nom">
				</label><br>
				<label>Prénom : 
					<input type="text" name="prenom" placeholder="Veuillez saisir votre prénom" required>
				</label><br>
				<label>Date de naissance : 
					<input type="date" name="date_naissance" placeholder="YYYY-MM-DD" required>
				</label><br>
				<label>Sexe :
					<label>M <input type="radio" name="sexe" value="M"> </label>
					<label>F <input type="radio" name="sexe" value="F"> </label>
				</label><br>
			</fieldset>
			<fieldset>
				<legend>Identifiants</legend>
				<label>Adresse email :
					<input type="email" name="email" required onchange="form.email_confirm.pattern = this.value;" title="C PAS UN EMAIL">
				</label><br>
				<label>Confirmer l'adresse email :
					<input type="email" name="email_confirm" required title="Les 2 emails doivent correspondre">
				</label><br>
				<label>Identifiant :
					<input type="text" name="login">
				</label><br>
				<label>Mot de passe :
					<input type="password" name="password">
				</label><br>
				<label>Confirmer le mot de passe :
					<input type="password" name="password_confirm">
				</label><br>
			</fieldset>
			<fieldset>
				<legend>Informations supplémentaires</legend>
				<label>Téléphone :
					<input type="tel" name="telephone">
				</label><br>
				<label>Photo de profil :
					<input type="file" name="photo_profil">
				</label><br>
				<label>Adresse du site :
					<input type="url" name="url_site">
				</label><br>
				<label>Présentation :
					<textarea name="presentation"></textarea>
				</label><br>
				<label>S'abonner à la newsletter
					<input type="checkbox" name="newsletter" checked>
				</label><br>
			</fieldset>
			<input type="submit" value="S'enregistrer">
			</form>
