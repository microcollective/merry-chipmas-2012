<?php
    $tracklist = scandir("./lib/music/");
    
    function GetExtension($filename){
		$extension = substr($filename, strrpos($filename,'.'));
		return $extension;
	}
					
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8" />
		<title>Merry Chipmas 2012</title>
		<link href="./lib/stylesheets/main.css" rel="stylesheet" type="text/css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="./lib/js/player/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="./lib/js/async.js"></script>
		<script type="text/javascript" src="./lib/js/snowstorm.js"></script>
	</head>
	<body>
		<div id="player"></div>
		<div id="page">
			<div id="header">
				<h1>Merry Chipmas 2012</h1>
				<h2>a collection of holiday inspired chiptune music</h2>
				<div id="header-sign">
					<br><div class="time">0:00</div>
				</div>
			</div>
			<h5><a href="./mc2012.zip" id="download" target="_blank">Download</a> or listen here<i>!</i></h5>
			<p>
				If you missed the re-upload of the archive to include Glenntai's track which 2xAA accidentally missed out (sorry Glenn), download that <a href="http://brkbrkbrk.com/mc2012/lib/music/26%20Cartridge%20of%20the%20Bleeps%20-%20Glenntai.mp3" target="_blank" id="download">here</a><i>!</i></p>
			<table>
				<?php for($i=2; $i < count($tracklist); $i++){ ?>
				<tr>
					<td width="52" class="<?php if($i==2) echo 'play'; ?>"></td>
					<td>
						<p>
							<a href="javascript:void(0);" id="<?php echo 'track-'.$i; ?>" class="playmusic" title="<?php echo substr($tracklist[$i], 0, strrpos($tracklist[$i],'.')); ?>">
								<?php if($tracklist[$i] == '22 Let it Snow - plants_humans.mp3') echo "22 Let it Snow - plants > humans";
									else echo substr($tracklist[$i], 0, strrpos($tracklist[$i],'.')); ?>
							</a>
						</p>
					</td>
				</tr>
				<?php } ?>
			</table>
			<div id="footer">
				<h3><a href="http://ucollective.org/" target="_blank">-&micro;Collective.org-</a></h3>
				<h4>Artwork by Mush</h4>
			</div>
		</div>
		<div id="footer-padder"></div>
		<div id="footer-bar">
			<div id="footer-bar-tree-two" class="media-sprite"></div>
			<div id="footer-bar-igloo" class="media-sprite"></div>
			<div id="footer-bar-tree" class="media-sprite"></div>
			<div id="footer-bar-snowman" class="media-sprite"></div>
			<div id="footer-bar-sign">
				<div id="footer-bar-sign-snow"></div>
				<div id="player">
				<br><div class="time"></div>
				</div>
			</div>
		</div>
	</body>
</html>