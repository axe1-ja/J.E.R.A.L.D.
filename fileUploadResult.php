<?php 

/*********************************************

* Une procédure pour vérifier si les données entrantes sont normales
* Ne pas appliquer sur de vraies pages
**********************************************/

//Récupération des informations de tableau contenues dans $_FILES.
var_dump($_FILES);

// tracer une ligne
echo "<hr>";

/*********************************************
* Le Vrai page
**********************************************/

// Informations stockées temporairement (tmp_name)
$tempFile = $_FILES['imgFile']['tmp_name'];

// Vérification du type de fichier et de l'extension
$fileTypeExt = explode("/", $_FILES['imgFile']['type']);

// type de fichier
$fileType = $fileTypeExt[0];

// extension de fichier
$fileExt = $fileTypeExt[1];

// vérification des extensions
$extStatus = false;

switch($fileExt){
	case 'jpeg':
	case 'jpg':
	case 'gif':
	case 'bmp':
	case 'png':
		$extStatus = true;
		break;
	
	default:
		echo "Les extensions d'image exclusives (jpg, bmp, gif, png) ne peuvent pas être utilisées."; 
		exit;
		break;
}

// Vérifiez que le fichier image est correct. 
if($fileType == 'image'){
	// Définissez les extensions autorisées sur jpg, bmp, gif, png, les autres téléchargements ne sont pas autorisés
	if($extStatus){
		// Répertoire et nom de fichier pour déplacer les fichiers temporaires
		$resFile = "./img/{$_FILES['imgFile']['name']}";
		// Déplacez le fichier enregistré temporairement dans le répertoire et le nom du fichier dans lequel nous l'enregistrerons
		$imageUpload = move_uploaded_file($tempFile, $resFile);
		
		// Vérifiez si le téléchargement a réussi
		if($imageUpload == true){
			echo "Fichier téléchargé avec succès. <br>";
			echo "<img src='{$resFile}' width='300' />";
		}else{
			echo "Le téléchargement du fichier a échoué.";
		}
	}	// end if - extStatus
		// Exécuter l'instruction else si l'extension n'est pas jpg, bmp, gif ou png
	else {
		echo "Les extensions d'image exclusives (jpg, bmp, gif, png) ne peuvent pas être utilisées.";
		exit;
	}	
}	// end if - filetype
	// Lorsque le type de fichier n'est pas une image
else {
	echo "Ce n'est pas un fichier image.";
	exit;
}
?>
