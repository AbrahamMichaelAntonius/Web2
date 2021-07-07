<?php
$hari = date ("D");
$kramat = ($hari%4 == 0) ? "KRAMAT" : "TIDAK KRAMAT";
echo "Hari <b>$hari</b> $kramat";
?>