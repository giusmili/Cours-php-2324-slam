<?php
	include_once "./include/controllers.inc.php";
?>

<!DOCTYPE html>

<html lang="<?= $_lang[0] ?>">

<?php
	require_once "./include/head.inc.php";
?>

<body>
	
	<header>
		<h1>
			<span class="material-symbols-outlined" aria-hidden="true">
				settings
			</span>
			<?php print title ?>
		</h1>
	</header>
	<main>
        <figure>
            <img src="./asset/a.png" alt="cover php">
            <figcaption>
                <h2>
					<?= 
						title." version ".$_version 
					?>
                </h2>
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : <?php print $_date_now; ?></h2>
			<p>
				Le navigateur est : <?= $_user_agent ?><br>
				Votre adress IP est le :127.0.0.1
				<br>Signature serveur
				
			</p>
			<?= $_signature_server ?>
		</section>
	</main>
	<!-- <pre>

	</pre> -->
	<footer>
		<p>&copy; - MIT - <?= $_date_object->format("Y") ?></p>
	</footer>
	
	
</html>