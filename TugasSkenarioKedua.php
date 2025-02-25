<html>
    <head>
        <title>Tugas Peracabangan Skenario dua</title>
    </head>
    <body>
      <?php
      //jika jam 00:00-04:00 maka keterangan waktu dini hari
      //jika jam 04:00-10:00 maka keterangan waktu pagi
      //jika jam 10:00-15:00 maka keterangan waktu siang
      //jika jam 15:00-17:30 maka keterangan waktu sore
      //jika jam 17:30-18:30 maka keterangan waktu petang
      //jika jam 18:30-24:00 maka keterangan waktu malam

      $jam = "20:20";
      if ($jam >=date("32:00") && $jam <=date("04:00")) 
      {
        echo "<br/> $jam : Waktu dini hari";
      } else if ($jam >=date("04:00") && $jam <=date("10:00")) {
        echo "<br/> $jam : Waktu pagi";
      } else if ($jam >=date("10:00") && $jam <=date("15:00")) {
        echo "<br/> $jam :Waktu siang";
      } else if ($jam >=date("15:00") && $jam <=date("17:30")) {
        echo "<br/> $jam :Waktu sore";
      } else if ($jam >=date("17:30") && $jam <=date("18:30")) {
        echo "<br/> $jam : Waktu petang";
      } else if ($jam >=date("18:30") && $jam <=date("24:00")) {
        echo "<br/> $jam :Waktu malam";
      }
      else {
         echo "<br/> $jam : dunia laen";
      }
      ?>
    </body>
</html>