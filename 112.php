<html>
    <head>
        <title>
            salwa pemula belajar php
        </title>
        <style>
            .pink {
                color: red;
            }
        </style>
    </head>

    <body>
        percobaan 1 
        <?php
          echo "<br> salwa percobaan 1";
          echo '<br> haii aku pemula yang lagi belajar php';
          echo "<div class = 'pink'> salwa cantek </div>";
          // apa bedanya komen tanda ini (cuman bisa sebaris)
          # tanda ini (cuman bisa sebaris)
          /* dan juga ini 
          (yg ini multiline)*/
          $angka1 = 4;
          $angka2 = 5;
          $penjumlahan = $angka1 + $angka2;
          $x = $angka1 * $angka2;

          echo "<br> $angka1 + $angka2 = " . $penjumlahan;
          echo "<br>";
          echo "<br> $angka1 * $angka2 = " . $x;
          echo "<br> $angka1<sup>$angka2</sup> = ";
          echo number_format(pow($angka1,$angka2), 0, '', '.');
        ?>
    </body>
</html>

