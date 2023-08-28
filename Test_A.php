<!DOCTYPE html>
<html>

<head>
   <title>Test B</title>
</head>

<body>
   <h2>Test A</h2>
   <?php
   echo "Mengurutkan array berikut : <br>
         [12,9,30,”A”,”M”,99,82,”J”,”N”,”B”] <br>
         Dengan abjad di depan dan angka di belakang : <br><br>";

   $array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];
   $abjad = [];
   $angka = [];

   foreach ($array as $item) {
      if (is_numeric($item)) {
         $angka[] = $item;
      } else {
         $abjad[] = $item;
      }
   }

   sort($abjad);
   sort($angka);

   $result = array_merge($abjad, $angka);
   $output = array_map(function ($item) {
      return '"' . $item . '"';
   }, $result);

   echo "[" . implode(", ", $output) . "]";
   ?>
   <ul>
      <a href="index.php">Back</a>
   </ul>

</body>

</html>
