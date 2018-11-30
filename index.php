<?php
include("includes/config.php");

	// session_destroy();

	if(isset($_SESSION['userLoggedIn'])){
		
		$userLoggedIn = $_SESSION['userLoggedIn'];
	}else {
		header("Location: register.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Spotify</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<div id="nowPlayingBarContainer">
		<div id="playingBaar">
			<div id="nowPlayingLeft">
				<div class="content">
					<span class="albumLink">
						<img src="assets/images/square.png" class="albumArtwork">
					</span>

					<div class="trackInfo">
						<span class="trackName">
							<span>Happy birthdat</span>
						</span>
						<span class="artistName">
							<span>Reece Kenney</span>
						</span>
					</div>

				</div>
			</div>

			<div id="nowPlayingCenter">
				<div class="content  playerControls">
					<div class="buttons">

						<button class="contolButton shuffle" title="Shuffle button">
							<img src="assets/images/icons/shuffle.png" alt="Shuffle">
						</button>
						
						<button class="contolButton previous" title="Previous button">
							<img src="assets/images/icons/previous.png" alt="Previous">
						</button>

						<button class="contolButton play" title="Play button">
							<img src="assets/images/icons/play.png" alt="Play">
						</button>

						<button class="contolButton pause" title="Pause button" style="display: none;">
							<img src="assets/images/icons/pause.png" alt="Pause">
						</button>

						<button class="contolButton next" title="Next button">
							<img src="assets/images/icons/next.png" alt="Next">
						</button>

						<button class="contolButton repeat" title="Repeat button">
							<img src="assets/images/icons/repeat.png" alt="Repeat">
						</button>
					</div>

					<div class="playBackBar">
						<span class="progressTime current">0.00</span>
						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>
						<span class="progressTime remaining">0.00</span>
					</div>
				</div>
			</div>

			<div id="nowPlayingRight">
				
			</div>
		</div>
	</div>

</body>
</html>