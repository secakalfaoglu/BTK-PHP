<?php
$onayliKursSayisi = 0;

foreach ($kurslar as $kurs) {
    if ($kurs['onay'] === true) {
        $onayliKursSayisi++;
    }
}
?>

<h1 class="mb-3"><?php echo title; ?></h1>
<P class="lead">
    <?php echo count($kategoriler) ?> kategoride <?php echo $onayliKursSayisi ?> kurs listelenmiştir.
</P>