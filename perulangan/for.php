<html>
<head>
<title>Perulangan Menggunakan For pada PHP</title>
<link rel="stylesheet" href="../style.css" type="text/css"/>
</head>
<body>
<?php
date_default_timezone_set('Asia/Jakarta');
$bil = isset($_POST['bil']) ? $_POST['bil'] : NULL;
echo '<div class="panel">';
echo '<h2>Perulangan Menggunakan For</h2>';
echo date("l, d-M-Y H:i:s");
echo '<hr>';
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="" method="post">';
echo '<input class="field" type="text" name="bil" value="'.$bil.'" placeholder="Masukkan Bilangan..."/>';
echo '<input class="tombol" type="submit" name="submit" value="OK"/>';
echo '</form>';
if((isset($bil))and($bil!=NULL)){
echo '<h4>Hasil Perulangan :</h4>';
for($i=1;$i<=$bil;$i++){
	for($j=1;$j<=$i;$j++){
	echo $i;
	}
	echo '<br/>';
}
}
echo '<hr>';
echo '<a href="../">&laquo; Kembali</a>';
echo '<hr>';
echo '<center><a href="http://syahrulzzadie.blogspot.com" target="blank_">&copy; Syahrulzzadie</a></center>';
echo '</div>';
?>
</body>
</html>
