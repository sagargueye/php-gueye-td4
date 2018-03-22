<!-- entête du site -->
<!DOCTYPE html>
<html>
	<head>
		<title><?= TITRE ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="Language" content="<?= LANG ?>"/>
		<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0"/> 

		<link href="<?= PATH_CSS ?>bootstrap.css" rel="stylesheet"> 
		<link href="<?= PATH_CSS ?>css.css" rel="stylesheet">
		
		<script type="text/javascript" src="<?= PATH_SCRIPTS ?>jquery-3.1.1.js"></script>
		<script type="text/javascript" src="<?= PATH_SCRIPTS ?>jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?= PATH_SCRIPTS ?>monjs.js"></script>
	</head> 
	<body>
		<!-- En-tête -->
		<header class="header" >
			<section class="container" >
				<div class = "row">
					<div class = "col-md-2 col-sm-2 col-xs-12">
						<img src="<?= PATH_LOGO ?>" alt="<?= LOGO ?>" class="img-circle">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-12">
						<h2><?= TITRE ?></h2>
					</div>
				</div>
			</section>
		</header>
		
		
<!-- Menu du site -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
				<li <?php echo ($page=='accueil')?> >
					<a href="index.php">
						<?= MENU_ACCUEIL ?>
					</a>
				</li>
    </ul>
	<ul class="nav navbar-nav">
				<li <?php echo ($page=='masession.php')?>  class=active>
					<a href="masession.php">
						Ajouter un film
					</a>
				</li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
				<li <?php echo ($page=='connexion')?>  >
					<a href="session.php">
						Deconnexion
					</a>
				</li>
    </ul>
  </div>
</nav>

<!-- Vue -->
			<section class="container">
				<div class = "row">	
	
<!--  contenue de la page -->
<?php 
echo "L'envoi a bien été effectué !";

if(isset($_GET['idi']))
{
?>

	<h1>Les détails du film</h1>

	<!--  Affichage de l'image du film et du tableau contenant toutes ses informations  -->

	<div class = "col-md-6 col-sm-6 col-xs-12"> 
		<img
        		src="<?= PATH_IMAGES.$image?>"
        		alt="Affiche du film"
        		height="800px" 
        		width="500px" 
        	/>	
	</div>

	<div class = "col-md-6 col-sm-6 col-xs-12"> 
		<table class="table table-bordered"  > 
	   		 <tr>
				<td>Titre</td>
				<td><?=$titre?></td>
			</tr>
			<tr>
				<td>Résumé</td>
				<td><?=$resu?></td>
			</tr>
			<tr>
				<td>Nom du fichier</td>
				<td><?=$image?></td>
			</tr>
			<tr>
				<td>Genre</td>
				<td><a href="index.php?genre=<?=$genre?>"><?=$genre?></a></td>
			</tr>
		</table>
	</div>

<?php
} 
?>
<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 