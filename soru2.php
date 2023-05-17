<?php
    function ucgen($sayi)
{
    $satir = 1;
    while ($satir <= $sayi) {
        for ($i = 1; $i <= $satir; $i++) {
            echo "* ";
        }
        echo "<br>";
        $satir++;
    }
}
ucgen(15);
?>