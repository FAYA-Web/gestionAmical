<?php
	function addEtudiant($nom, $prenom, $filiere, $residence,$telephone){
		$sql = "INSERT INTO etudiant VALUES(null, '$nom', '$prenom', '$filiere', '$residence',$telephone)";
		return executeSQL($sql);
	}
	function listEtudiant(){
		$sql = "SELECT * FROM etudiant";
		return executeSQL($sql);
	}
	function updateEtudiant($id,$nom, $prenom, $filiere, $residence,$telephone){
		$sql = "UPDATE etudiant SET nom='$nom', prenom='$prenom',filiere='$filiere', residence='$residence',telephone=$telephone WHERE id=$id";
		return executeSQL($sql);
	}

	function getEtudiantById($id){
		$sql = "SELECT * FROM etudiant WHERE id=$id";
		return executeSQL($sql);
	}
	function deleteEtudiant($id){
		$sql = "DELETE FROM etudiant WHERE id = $id";
		return executeSQL($sql);
	}
	function search($key){
		$sql="SELECT * FROM etudiant WHERE nom LIKE '%$key%'";
		return executeSQL($sql);
	}
?>