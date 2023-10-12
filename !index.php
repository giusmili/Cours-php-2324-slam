<?php
	const main_title = "Cours php : started";
	/* $_navigator = $_SERVER["HTTP_USER_AGENT"];
	$_long_date = new DateTime();
	$_version = phpversion(); */

	/* tableau assoc */
	$_props = [
				"navigateur"=>$_SERVER["HTTP_USER_AGENT"],
				"long_date"=>new DateTime(),
				"version"=>phpversion()
			];
	
    include_once './includes/controller.inc.php'
?>


<!DOCTYPE html>
<html lang="<?= User::$_lang[0] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Started PHP</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="<?= $_user->_link?>">
</head>
<body>
	<!--cours https://hackmd.io/iNktz6XzRyu7gGmKvPpXfQ?view-->
	<header>
		<h1>
			<span class="material-symbols-outlined" aria-hidden="true">
				settings
			</span>
			<?= main_title ?>
		</h1>
	</header>
	<main>
        <figure>
            <img src="<?= User::$_image?>" alt="cover php">
            <figcaption>
                <h2>
                    PHP version <?= $_props["version"] ?>
                </h2>
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : <?= $_props["long_date"]->format("d/m/Y") ?></h2>
			<p>
				Le navigateur est <?= $_props["navigateur"] ?> <br>
				Votre adress IP est le :127.0.0.1
				<br>Signature serveur
				
			</p>
			<address>Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34 Server at localhost Port 80</address>
		</section>
	</main>
	<!-- <pre>
		
	</pre> -->
	<footer>
		<p>&copy; - MIT - <?= User::localDate() ?></p>
	</footer>
	
</html>
