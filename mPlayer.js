$(function() {
	
	const source = './videos/video1/stream.mpd';
	const video = document.querySelector('video');
	const player = new Plyr(video);
	window.player = player;
	if (shaka.Player.isBrowserSupported()) {
		// Install built-in polyfills
		shaka.polyfill.installAll();
		const shakaInstance = new shaka.Player(video);
		shakaInstance.load(source);
	} else {
		console.warn('Browser is not supported!');
	}

	$('.containercustom').css("width", "60%");
	$('.containercustom').css("position", "absolute");
	$('.containercustom').css("top", "60%");
	$('.containercustom').css("left", "50%");
	$('.containercustom').css("margin-right", "-50%");
	$('.containercustom').css("transform", "translate(-50%, -50%)");
	$('h1').css("color", "white");
});