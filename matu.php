<?php
$Name = $_POST['Nama'];
$bilangan2 = $_POST['bil2'];

echo "<p>Nama Nasabah: ".$Name."<p>";
echo "<p>Awal Nasabah: ".$bilangan2."<p>";
echo "<p>Hasil depositp nasabah ".($bilangan2 - (($bilangan2 * 0.03)) * 11);
?>