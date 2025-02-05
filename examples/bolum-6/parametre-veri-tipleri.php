<?php

    declare(strict_types=1);
    function toplama(int $sayi1, int $sayi2, bool $isActive, array $sayilar) {
        return $sayi1 + $sayi2;
    }
    
    echo toplama(10, 20, true, [1, 2, 3]);
?>