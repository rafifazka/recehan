<html>
	<head>
		<title>Bitcoin Mining Calculator</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="favicon.png" />
	</head>
	<body>
		
			<form action="simpan.php" method="POST" class="smart-green">
			<h1>Bitcoin Mining Calculator
				<span>Parameters</span>
			</h1>
					<label>Hash :</label>
					<label><input type="text" name="hash" placeholder="Input Hash" required></label>
					<label>Payout Minggu Ini :</label>
					<label><input type="text" name="payout" placeholder="Input Payout Minggu ini. ex=0.00002109" required></label>
					<label>Difficulty :</label>
					<label><input type="text" name="Dificulty" placeholder="Input Difficulty %" required></label>
				
				<label>
				<input name="submit" type="submit" class="button" value="Proses">&nbsp;&nbsp;
				<input type="reset" class="button" value="Batal">
				</label>
			</form>
	</body>
</html>
