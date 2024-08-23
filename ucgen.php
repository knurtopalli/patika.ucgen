<?php

function ucgen($satirSayisi)
{
    $sonuc = '';

    for($satir = 1; $satir <= $satirSayisi; $satir++) {
        for ($yildiz = 1; $yildiz <= $satir; $yildiz++) {
            $sonuc .= '*';
        }

        $sonuc .= "\n";
    }

    return $sonuc;
}

echo ucgen(15);