<?php 

$nama = [
    [
        "Nama" => "Satria",
        "Kelas" => "XI RPL 1"
    ],
    [
        "Nama" => "Arsyi",
        "Kelas" => "XI RPL 2"
    ],
    [
        "Nama" => "Dhika",
        "Kelas" => "XI RPL 3"
    ],
    [
        "Nama" => "Evan",
        "Kelas" => "XI RPL 4"
    ],
    [
        "Nama" => "Fabian",
        "Kelas" => "XI RPL 5"
    ],
    [
        "Nama" => "Irfan",
        "Kelas" => "XI RPL 6"
    ],
    ];

    //menampilkan output
    foreach ($nama as $name) {
		echo " Nama : <b>".$name["Nama"],"</b>";
        echo " Kelas: <b>".$name["Kelas"], "</b><br>";
    }
?>   