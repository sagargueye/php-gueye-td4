<?php


// Message d'alerte permettant d'afficher un message d'erreur si le fichier depasse 100ko

if ($_FILES['fichier']['size'] >100)
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong><?php echo "le fichier ne doit pas dépasser 100 ko!"; ?></strong>
	</div>
<?php
}
if (isset($_FILES['fichier'])==false || $_FILES['fichier']['error'] != 0)
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong><?php echo "le fichier n'exixte pas"; ?></strong>
	</div>
<?php
}
if (iconv_strlen($titre)<1)
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong><?php echo "le titre doit contenir au moins une lettre"; ?></strong>
	</div>
<?php
}
if (iconv_strlen($resum)>=1)
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong><?php echo "le resumé doit contenir au moins une lettre"; ?></strong>
	</div>
<?php
}
?>