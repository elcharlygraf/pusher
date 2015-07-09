<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PUSHER</title>
	<script src="//js.pusher.com/2.2/pusher.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<div id="container">
		<h3>CHAT ONLINE ;3</h3>
		<form action="#" id="comment" name="comment" method="POST">
			<input type="text" name="name" id="name" placeholder="Tu Nombre"><br>
			<textarea name="comment" id="msg" cols="30" rows="3"></textarea><br>
			<input type="submit" name="go" value="Enviar">
		</form>
		
		<div id="comments">
		</div>
		<hr>
	</div>
</body>
</html>