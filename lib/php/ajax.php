<?php
	require("smartReadFile.php");

	$tracklist = scandir("../music/");

	$jax = htmlentities(trim(mysql_escape_string($_GET['jax'])), ENT_COMPAT | ENT_HTML401, 'UTF-8');
	$jax = $jax;
	$filehandle = $_SERVER['DOCUMENT_ROOT'].'/mc2012/lib/music/'.$tracklist[$jax];			
	smartReadFile($filehandle, basename($filehandle), 'audio/mpeg, audio/x-mpeg, audio/x-mpeg-3, audio/mpeg3');
	exit();
?>