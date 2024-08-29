<!DOCTYPE html>
<html>
<head>
	<title>Ajout Membre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
</head>
<body>
	<div class="container col-md-6 col-md-offset-3 spacer">
		<div class="panel panel-info">
			<div class="panel-heading">Ajout Membre</div>
			<div class="panel-body">
				<form method="POST" action="controller/etudiantController.php">
					<div class="form-group">
						<label class="control-label">NOM</label>
						<input type="text" name="nom" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Prenom</label>
						<input type="text" name="prenom" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Filiere</label>
						<input type="text" name="filiere" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Residence à Keur Massar </label>
						<input type="text" name="residence" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Telephone</label>
						<input type="tel" name="telephone" class="form-control">
					</div>
					<button class="btn btn-success" name="valider" type="submit">Ajouter</button>
					<button class="btn btn-danger" name="annuler" type="reset">Annuler</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>