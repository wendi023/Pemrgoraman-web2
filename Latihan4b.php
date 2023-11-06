<?php

$negara = ["Indonesia","Singapura", "Malaysia", "Brunei", "Thailand"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Daftar Negara Asean Awal</title>
</head>
<body>
	<?php

		echo "<b> Dafatar Negara Asean Awal </b>";
		for ($i = 0; $i < count($negara); $i++){
		echo "<li>$negara[$i]</li>";
	}
	?>
	<?php
		echo "<b> Daftar Negara Asean Baru </b>";
		$baris = array_push($negara, "Laos". "Filiphina", "Myanmar");
		foreach ($negara as $baru){
			echo"<li>$baru</li>";
		}	
	?>

</body>
</html>