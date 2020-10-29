<?php
/*
Generátor html z http requestů
*/
// pole souborů na které chceme provést request
$urls = ['bmi.php', 'index.php', 'kontakt.php', 'o-mne.php', 'galerie.php'];

foreach ($urls as $url) {
  $html_soubor = explode('.', $url)[0] . '.html';

  // provede http GET request
  $obsah = file_get_contents('http://kovarlu-sport-beh.test/' . $url);

  // změní adresy na koncovku .html
  $obsah = str_replace('.php"', '.html"', $obsah);
  $obsah = str_replace('.php#', '.html#', $obsah);

  $titulek = '';
  preg_match("/<h1>(.+)<\/h1>/", $obsah,  $titulek);
  if ($titulek) {
    echo $titulek[1] . ", ";
    $titulek = $titulek[1] . ' |';
  } else {
    echo "Bez titulku, ";
    $titulek = '';
  }

  $obsah = str_replace("[TITULEK]", $titulek, $obsah);


  if ($obsah !== false) {
    // uložení souboru
    file_put_contents($html_soubor, $obsah);
    echo $html_soubor . ' vygenerován. <br>';
  }
}
