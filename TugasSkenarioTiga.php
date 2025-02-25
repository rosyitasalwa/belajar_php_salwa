<html>
    <head>
        <title>
        Tugas Percabangan Skenario Tiga
        </title>
        Tugas percabangan 
        <br> Anggota Kelompok : 
        <br> 1. Salwa Rosyita Maharani (30)
        <br> 2. Nirianda Kaylila (22)
    </head>
    <body>
     <?php
     /*
1. Pulang sekolah pukul 15:30 dan tiba di rumah pukul 15:45.
2. Mengaji selama 30 menit, namun Andi harus mandi terlebih dahulu sebelum mengaji.
3. Mengerjakan tugas sekolah selama 2 jam tanpa terputus.
4. Menghafalkan dialog untuk festival kesenian budaya yang akan dia ikuti di sekolah selama setengah jam.
5. Ibu meminta Andi untuk membeli bumbu masakan sebelum makan malam.
6. Makan malam dilakukan setelah sholat maghrib tetapi harus selesai sebelum sholat isya.
7. Antara pukul 17:00 hingga sebelum tidur, Andi perlu menyisihkan waktu 30 menit tanpa terputus untuk chatting mengenai persiapan festival kesenian budaya yang akan dia ikuti di sekolah dengan Raya yang berada di Arab. Perbedaan waktu dengan Arab adalah 4 jam lebih cepat dari waktu di tempat Andi.
8. Sebelum tidur, Andi dan keluarganya memiliki kebiasaan mengobrol bersama keluarga selama 30 menit. Mengobrol bersama keluarga dilakukan setelah tugas sekolah Andi selesai dikerjakan. Dapat dimajukan jika tidak ada tugas sekolah.
9. Andi tidur jam 22:00 dan bangun jam 04:00.

Petunjuk Aktivitas:
Pada aktivitas ini, kamu harus berpasangan untuk melakukan diskusi bersama.
Tugasmu adalah menentukan jadwal harian Andi yang paling efisien, tanpa ada kegiatan yang bertumbukan dan terlewatkan.
Buat web yang berisikan list jadwal harian secara urutan jam.
Buat web menggunakan percabangan bersarang berdasarkan jadwal harian yang sudah kamu rancang. Contoh hasil pemrograman: jam 18:20, tidak ada tugas sekolah, Andi makan malam bersama keluarga.
Sertakan pula namamu dan nama teman diskusimu dalam web yang kamu buat.

Bahan diskusi:
Apa yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan?
Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut!
Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya?
Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah?
Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki?
*/
$jam = "15:30";

if($jam == "15:30") {
    echo "<br/> $jam Pulang Sekolah"; 
} else if($jam == "15:45") {
    echo "<br/> $jam Sampai di Rumah";
} else if($jam >=date("15:45") && $jam < "16:10") {
    echo "<br/> $jam Mandi"; 
} else if($jam >= "16:10" && $jam < "16:40") {
    echo "<br/> $jam Mengaji"; 
} else if($jam >= "16:40" && $jam < "17:10") {
    echo "<br/> Menghafalkan dialog festival kesenian budaya";
} else if($jam >= "17:10" && $jam < "17:40") {
    echo "<br/> $jam Beli bumbu";
} else if($jam >= "17:40" && $jam < "18:10") {
    echo "<br/> $jam Chattingan";
} else if($jam >= "18:10" && $jam < "18:35") {
    echo "<br/> $jam Sholat Magrib";
} else if($jam >= "18:35" && $jam < "19:05") {
    echo "<br/> $jam Makan malam";
} else if($jam >= "19:05" && $jam < "19:30") {
    echo "<br/> $jam Sholat Isya";
} else if($jam >= "19:30" && $jam < "21:30") {
    echo "<br/> $jam Mengerjakan tugas";
} else if($jam >= "21:30" && $jam < "22:00") {
    echo "<br/> $jam Ngobrol dengan keluarga";
} else if ($jam == date("04:00")) {
    echo "<br/> $jam Bangun Tidur";
} else if($jam >= "22:00" || $jam < "04:00") {
    echo "<br/> $jam Tidur";
}
else
{
    echo "<br/> dunia laen";
}

?> 

<?php
echo "<p>1. Apa yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan? </br> => Agar jadwal Andi tidak bertabrakan/terlewatkan, maka kita memastikan semua kegiatan Andi memiliki rentang waktu yang jelas.</br></p>";
echo "<p>2. Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut! </br> => Urutan kegiatan Andi yang kami buat berdasarkan logika keseharian dan prioritas aktifitas.</br></p>";
echo "<p>3. Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya? </br> => Jika Andi chatting pukul 17:40 WIB, maka Raya chattingan dengan Andi pukul 13:40 WAS. Perbedaan waktu antara WIB dan WAS adalah 4 jam, 4 jam lebih cepat di Indonesia dibanding Arab.</br></p>";
echo "<p>4. Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah? </br> => Saat ini tidak ada waktu luang yang signifikan dalam jadwal Andi karena semua waktu sudah terisi dengan kegiatan. Jika ada waktu luang, ketika Andi tidak ada tugas sekolah.</br></p>";
echo "<p>5. Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki? </br> => Jika tidak ada tugas sekolah, maka Andi akan memiliki waktu luang 2 jam.</br></p>";

     ?>
    </body>
</html>