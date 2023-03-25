<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shoutcast Player</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Shoutcast Player</h1>
		<form id="player-form">
			<label for="stream-url">Enter Stream URL:</label>
			<input type="text" id="stream-url" name="stream-url" placeholder="http://example.com:8000">
			<button type="submit" id="play-btn">Play</button>
		</form>
		<audio id="player"></audio>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#player-form').on('submit', function(e) {
				e.preventDefault();
				var streamUrl = $('#stream-url').val();
				$('#player').attr('src', streamUrl);
				$('#player')[0].play();
			});
		});
	</script>
</body>
</html>
