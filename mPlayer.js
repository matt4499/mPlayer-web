$(function() {
	const source = './videos/output.mp4';
	const video = document.querySelector('video');
	const player = new Plyr(video);
	window.player = player;
	if (shaka.Player.isBrowserSupported()) {
		// Install built-in polyfills
		shaka.polyfill.installAll();
		const shakaInstance = new shaka.Player(video);
		shakaInstance.load(source);
		console.log("[mPlayer] Using Shaka player");
		const title = document.querySelector("body > h1 > center");
		title.innerText = "[Debug] Using";
	} else {
		video.src = source;
		const title = document.querySelector("body > h1 > center");
		title.innerText = "[Debug] Not Using";
		console.log("[mPlayer] Browser does NOT support Shaka player. Using Legacy MP4/VIDEO source.");
	}
	$('.containercustom').css("width", "60%");
	$('.containercustom').css("position", "absolute");
	$('.containercustom').css("top", "60%");
	$('.containercustom').css("left", "50%");
	$('.containercustom').css("margin-right", "-50%");
	$('.containercustom').css("transform", "translate(-50%, -50%)");
	$('h1').css("color", "white");
});
