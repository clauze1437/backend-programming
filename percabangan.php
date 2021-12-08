<?php

$nilai = 95;

# Jika nilai di atas 90 = A
if ($nilai > 90) {
    echo "A";
} # Jika nilai di atas 80 = B
else if ($nilai > 80) {
    echo "B";
} # Jika nilai di atas 70 = C
else if ($nilai > 70) {
    echo "C";
} # Selain A,B dan C
else {
    echo "D";
}
