$(document).ready(function(){
	$("#jquery_jplayer_1").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {mp3:"/items/music/2xAA%20-%20Electro%20Gypsy%20-%20Savlonic%20(C0V3R).mp3"});
		},
		solution: 'html, flash',
		swfPath: "/working/new/music/player/",
		supplied: "mp3",
		wmode:"window",
		cssSelectorAncestor: "",
		cssSelector: {
			play: ".play",
			pause: ".pause",
			seekBar: ".seek-bar",
			playBar: ".play-bar",
		},
	});
});