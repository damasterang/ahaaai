<?php
session_start();
$_SESSION['Nama'] = $_POST['username']; 
echo "Nama user Anda adalah: ".$_SESSION
['Nama']."<br><br>"; 
echo "<a href=hal1.php>Hal 1</a> <a href=hal2.php>Hal 2</a> <a 
href=hal3.php>Hal 3</a>"; 
?> 