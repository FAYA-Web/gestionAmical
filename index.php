<?php
	if(isset($_GET['page'])){
		require_once 'menu.php';
		switch ($_GET['page']) {
			case 'addM':
				require_once 'view/ajout.php';
				break;
			case 'listM':
				require_once 'model/db.php';
				require_once 'model/etudiant.php';
				$liste = listEtudiant();
				if (isset($_GET['key'])) {
					$liste=search($_GET['key']);
				}
				require_once 'view/list.php';
				break;
			case 'editM':
				require_once 'model/db.php';
				require_once 'model/etudiant.php';
				$tab = getEtudiantById($_GET['id']);
				$ligne = mysqli_fetch_row($tab);
				require_once 'view/edit.php';
				break;
		}
	}
	else{
		require_once 'menu.php';
	}

?>