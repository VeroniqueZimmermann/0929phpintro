<!doctype html>
<html>
<head>
<meta charset ="utf-8">
<title>PHPFormular</title>
<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: #555;
    font-size: 13px;
}


</style>
<?php
    $ep = $_GET["ep"];
    $anz = $_GET["anz"];
    $gesamt = $ep*$anz;


?>
</head>
<body>
<?="Ihr Einkauf kostet insgesamt $gesamt Euro<br>" ?>
<form action="" method="get">
<label>Einzelpreis</label><input type="number" min=1.0 max=99.99 step=0.01 name="ep" value="true">
<label>Anzahl</label><input type="number" min=1 max=5 name="anz" value="true">
<input type=submit>


</form>

</body>


</html>