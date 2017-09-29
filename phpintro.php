<!doctype html>
<html>
<head>
<?php
    $gruss = "herzlich willkommen auf dieser Seite";
    $rahmenfarbe="green";
    $monate = array("jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
 ?>
<meta charset="utf-8">
<title>neuer Titel der Seite </title>
<style>
  #welcome{
    border:2px dashed <?php echo $rahmenfarbe; ?>;
  }
  #message{color: blue;}
</style>


</head>

<body>
<h3>Hallo</h3>
<div id="welcome">

<?="shorthand tag for php echo "?>
  
  <table>
  <?php
  echo "<div id='message'>$gruss</div>";
//  echo "<table>";
  for($zeile = 1;$zeile < 9; $zeile++)
    {
      echo "<tr>";
      for($spalte = 1;$spalte < 9; $spalte++)
      {
        echo "<td>$zeile $spalte</td>";
      }
      echo "</tr>";
    }

    echo"</table>";

   ?></div>
 <p>blablabla</p>
</body>
</html>