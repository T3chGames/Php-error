<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
   <link rel="stylesheet" href="form.css">
 </head>
 <body>
   <div class="wrapper">
   <?php
   if(isset($_POST['submit'])) {
   $dice1 = mt_rand(1,6);
   $dice2 = mt_rand(1,6);

   echo "<table class='table'>";
   for ($i=0; $i < 6 ; $i++) {
     echo "<tr>";
     for ($j=0; $j < 6 ; $j++) {
         $class = chooseBorder($i,$j,$dice1,$dice2);
         echo "<td> <img class='icon cell color".mt_rand(1,4). " " . $class . "' src='img/icon".mt_rand(1,4).".svg ' </td>";
     }
     echo "</tr>";
 }

 function chooseBorder($i,$j,$dice1,$dice2) {
     $class = "";
     if ($dice1 == $i && $dice2 == $j) {
         $class = "border-red";
         return $class;
     }

     if ($dice1 == $i || $dice2 == $j) {
         $class = "border-black";
         return $class;
     }

     return $class;
 }
echo "</table>";
echo "<img class='dice1' src='img/dice".$dice1.".gif'>";
echo "<img class='dice2' src='img/dice".$dice2.".gif'>";

}
    ?>
    <form method="get" action="/php1/eindopdracht/cal.php">
     <button type="submit" class="button1">renew</button>
 </form>
    <form method="POST">
      <button type='submit' class='button2' name='submit' value='submit'>throw</button>
    </form>
</div>
  </body>
  </html>
