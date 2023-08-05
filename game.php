<?php
echo "welcome to mygame\n";
while (true) {
    echo "game tebak angka 1-9\n";
    $angka = rand(1, 9);
    echo "Masukkan tebakan:";
    $player = trim(fgets(STDIN));
    if ($player == $angka) {
        echo "Menang.\n angka komputer adalah $angka";
        exit;
    } else {
        echo "Kalah\n angka komputer adalah $angka\n";
    }
}
