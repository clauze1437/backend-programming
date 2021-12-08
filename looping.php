<?php

# Menampilkan angka 0 - 9

# 3 statement
# statement pertama: nilai awal
# statement kedua: batasan looping
# statement ketiga
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
echo "<br>";

for ($i = 0; $i < 10; $i += 2) {
    echo $i;
}
echo "<br>";

for ($i = 0; $i < 10; $i = $i + 2) {
    echo $i;
}
