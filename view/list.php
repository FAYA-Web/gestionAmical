<!DOCTYPE html>
<html>
<head>
	<title>Liste Membre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<script type="text/javascript">
		function confirmation(){
			return confirm("Voulez-vous reellement supprimer ce membre?");
		}
	</script>
</head>
<body>
	<form method="GET" action="?page=listM" style="margin-left: 1000px;">
 		<input type="hidden" name="page" value="listM">
 		<input type="text" name="key">
 		<button type="submit" class="btn btn-success" style="border-radius: 10px;">Rechercher</button>
 	</form>
	<div class="container col-md-8 col-md-offset-2 " >
		<div class="panel panel-info">
			<div class="panel-heading">Liste des Membres</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<th>Identifiant</th>
						<th>Nom</th>
						<th>Prenom</th>
						<th>Filiere</th>
						<th>Residence à Keur Massar</th>
						<th>Telephone</th>
						<th>Action 1</th>
						<th>Action 2</th>
					</tr>
					<tr>
						<?php
							while ($membre= mysqli_fetch_row($liste)) {
								echo "<tr>
										  <td>$membre[0]</td>
										  <td>$membre[1]</td>
										  <td>$membre[2]</td>
										  <td>$membre[3]</td>
										  <td>$membre[4]</td>
										  <td>$membre[5]</td>
										  <td><a href='?page=editM&id=$membre[0]' class='btn btn-info btn-block'>Modifier</a></td>
										  <td><a href='controller/etudiantController.php?id=$membre[0]' class='btn btn-warning btn-block' onclick='return confirmation()'>Supprimer</a></td>
									  </tr>";
							}
						?>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>