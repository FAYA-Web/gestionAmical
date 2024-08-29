<?php
	require_once '../model/db.php';
	require_once '../model/etudiant.php';

	if (isset($_POST['valider'])){
		extract($_POST);
		addEtudiant($nom, $prenom, $filiere, $residence,$telephone);
		header("location:http://localhost/GestionAmicale/?page=listM");
	}
	if(isset($_POST['mod'])){
		extract($_POST);
		updateEtudiant($id,$nom, $prenom, $filiere, $residence,$telephone);
		header("location:http://localhost/GestionAmicale/?page=listM");
	}
	if (isset($_GET['id'])){
		deleteEtudiant($_GET['id']);
		header("location:http://localhost/GestionAmicale/?page=listM");
	}
?>