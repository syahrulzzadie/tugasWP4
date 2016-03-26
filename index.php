<html>
<head>
<title>TUGAS 4 - WEB PROGRAMING 1</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
date_default_timezone_set('Asia/Jakarta');
echo '<div class="panel">';
echo '<h2>WEB PROGRAMING 1 - TUGAS 4</h2>';
echo date("l, d-M-Y H:i:s");
echo '<hr><ul>';
echo '<a href="perulangan/for.php"><h4><li>Perulangan Menggunakan For</li></h4></a>';
echo '<a href="perulangan/while.php"><h4><li>Perulangan Menggunakan While</li></h4></a>';
echo '<a href="faktorial/for.php"><h4><li>Menghitung Faktorial Menggunakan For</li></h4></a>';
echo '<a href="faktorial/while.php"><h4><li>Menghitung Faktorial Menggunakan While</li></h4></a>';
echo '<a href="faktorial/do_while.php"><h4><li>Menghitung Faktorial Menggunakan Do While</li></h4></a>';
echo '</ul><hr>';
echo '<center><a href="http://syahrulzzadie.blogspot.com" target="blank_">&copy; Syahrulzzadie</a></center>';
echo '</div>';
?>
</body>
</html>