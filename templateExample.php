<?php $title = " mein Standard";
    $bgVariable = "silver";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- den Titel von aussen steuern -->
<!-- wenn einer über die URL angeboten wird, dann nehmen wir den
     wenn in der URL keiner ist, dann nehmen wird 'default' title -->
<title><?=$_GET['title']??$title?></title>
<!-- if ist eine titel da , dann nehme, sonst default -->
<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
}
body{
    /*background: <?=$_GET['bg']??$bgVariable?>;*/
    <?php   $wert1 = $_GET['red'] ?? 100;
            $wert2 = $_GET['green'] ?? 100;
            $wert3 = $_GET['blue'] ?? 100;
            $schriftRed = ($wert1 > 128) ? 0:255;
            $schriftGreen = ($wert2 > 128) ? 0:255;
            $schriftBlue = ($wert3 > 128) ? 0:255;

    echo "background:rgb($wert1,$wert2,$wert3);
            color: rgb($schriftRed,$schriftGreen,$schriftBlue);";?>
}
</style>
</head>
<body>

<h4>Wenn Ihnen die Farbe des Hintergrundes nicht gefällt, klicken sie hier, können sie eine andere Farbe wählen</h4>
Weil sie ja so ein toller Designer sind, können Sie jetzt beliebige Farbanteile bestimmen:<br>
<form action="" method="get">
    <input type=number min=0 max=255 name="red">
    <input type=number min=0 max=255 name="green">
    <input type=number min=0 max=255 name="blue">
    <input type=submit value="Farbe ändern">

</form>


</body>
</html>