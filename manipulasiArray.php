<?php

$hari = ["Senin", "Selasa", "Rabu"];

echo "array awal : ";
print_r($hari);
echo "<hr>";

echo "array setelah fi pop :";
$hasil = array_pop($hari); //menghapus atau mengambil elemen terakkhir dari array
print_r($hari);
echo "<br>elemen yang di pop : $hasil <hr>";

echo "array setelah di push :";
$hasil = array_push($hari, "Kamis", "Jum'at"); //menambahkan beberapa elemen pada akhir array
print_r($hari);
echo "<hr>";

echo "array setelah di shift :";
$hasil = "array setelah  di shift :";
print_r($hari);
echo "<br>elemen yang di shift : $hasil <hr>";

echo "array setelah di shift :";
$hasil = array_unshift($hari, "elemen", "ditambahkan"); //menambahkan beberapa elemen pada akhir array
print_r($hari);

