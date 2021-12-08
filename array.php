<?php

# Membuat Array
$makanans = ['Ayam', 'Nasi Goreng', 'Mie Ayam'];

# Mengakses Array
echo $makanans[2];
echo "<br>";
echo array_search('Mie Ayam', $makanans);
echo "<br>";
for ($i = 0; $i < count($makanans); $i++) {
    if ('Nasi Goreng' == $makanans[$i]) {
        echo $i;
    }
}
