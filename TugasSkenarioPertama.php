<html>
   <head>
      <title>
        Tugas Percabangan Skenario Satu
      </title>
   <head/>
   <body>
    <?php
      // jika nilai 100 - 90 maka nilai A
      // jika nilai 89 - 80 maka nilai B
      // jika nilai 79 - 70 maka nilai C
      // jika nilai 69 - 0 maka nilai D
      $nilai = "80";
      if ($nilai >= "90" && $nilai <= "100") 
      {
        echo "<br/> Nilai $nilai : A";
      } else if ($nilai >= "80" && $nilai <= "89") {
        echo "<br/> Nilai  $nilai : B";
      } else if ($nilai >= "70" && $nilai <= "79") {
        echo "<br/> Nilai $nilai : C";
      } else if ($nilai >= "0" && $nilai <= "69") {
        echo "<br/> Nilai $nilai : D";
      }
      else 
      {
        echo "<br/> Nilai wajib di antara 0-100";
      }
    ?>
   </body>
</html>
