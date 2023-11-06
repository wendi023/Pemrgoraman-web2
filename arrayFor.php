<?php

$nama = ["Wendi", "Rolan", "Armanda", "Wawan", "Pajri"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Loo[inh for Array</title>
</head>
<body>
<?php

	for ($i = 0; $i < count($nama); $i++) { //Count berguna untuk menerukan jumlah elemen ada array.
											//sehingga looping akan berhenti ketika isi array sudah tampil semua.
			echo "<li> $nama[$i]</li>";
		}

	?>

</body>
</html>


