<?php

/*
//recuperer le titre
$titre = $_POST['titre'];
echo $titre;
//recuperer le resumé
$resum = $_POST['resum'];
echo $resum;
//recuper le genre
 $an = isset($_POST['genr']) ? $_POST['genr'] : '';             
echo $an;
*/

//------------------vérification des données du formulaire------------------------------------

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

if (isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0)
{		
        // Testons si le fichier n'est pas trop gros

        if ($_FILES['fichier']['size'] <= 1000)
        {

                // Testons si l'extension est autorisée

                $infosfichier = pathinfo($_FILES['fichier']['name']);

                $extension_upload = $infosfichier['extension'];

                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
				//si l'extension du fichier se trouve dans la liste des extensions autorisées
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On valide le fichier et passe a la verification du titre du film
						//recuperer le titre
						$titre = htmlspecialchars($_POST['titre']);
						//le titre doit contenir au moins une lettre
						if (iconv_strlen($titre)>=1)
						{
							// On valide le titre et passe a la verification du resumé du film
							//recuperer le resumé
							$resum = htmlspecialchars($_POST['resum']);
							//le resumé doit contenir au moins une lettre
							if (iconv_strlen($resum)>=1)
							{
								//tout est ok alors on peut valider et passer à l'insertion des données dans la BD
								//recuper le genre
								$an = isset($_POST['genr']) ? $_POST['genr'] : ''; 
								move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' . basename($_FILES['fichier']['name']));
								require_once(PATH_MODELS.'newfilmDAO.php');
								require_once(PATH_MODELS.'newgenreDAO.php');
								//appel view
								require_once(PATH_VIEWS.$page.'.php');
								echo "L'envoi a bien été effectué !";
							}else{
								//appel view
								require_once(PATH_VIEWS.'masession.php');
								echo "le resumé doit contenir au moins une lettre !";
							}
						}else{
							//appel view
							require_once(PATH_VIEWS.'masession.php');
							echo "le titre doit contenir au moins une lettre!";
						}
                }else{
					//appel view
					require_once(PATH_VIEWS.'masession.php');
					echo "l'extension!";
				}
        }else{
			//appel view
			require_once(PATH_VIEWS.'masession.php'); 
			echo "le fichier ne doit pas depasser 100ko!";
		}

}else{
//appel view
require_once(PATH_VIEWS.'masession.php'); 
echo "le fichier n'existe!";	
}


//appel view
//require_once(PATH_VIEWS.'masession.php'); 

?>