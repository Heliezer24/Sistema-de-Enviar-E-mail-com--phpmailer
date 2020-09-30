


<html>
<link rel="stylesheet" href="estilo/style.css">
<body>

	<header>
		<h1>ENVIAR E-MAIL</h1>
	</header>
	<section >
		<form method="post" action="send-message.php">
			<div class="form-wrap">
				<div>
					<label for="email">E-mail destinatario:</label>
					<input type="email" name="email" required><br><br>
				</div>
				<div>
					<label for="assunto" class="assunto">Assunto da mensagem:</label>
					<input type="text" name="assunto">
				</div>
				<div class="form-group">
					<label for="message">Mensagem</label>
					<textarea rows="5" name="message" required></textarea>
				</div>
				
			</div>
			<div class="form-wrap">
				<button  name="submit" type="submit">ENVIAR</button>
			</div>
			
			
		</form>
	</section>

	<footer>
        <p>&copy; Heliezer Tomás Maria </p>
    </footer>
	
</body>
</html>