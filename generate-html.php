<?php
/*
Generátor html z http requestů
*/
// pole souborů na které chceme provést request
$urls = ['bmi.php', 'index.php', 'kontakt.php', 'o-mne.php'];

foreach ($urls as $url) {
  $html_soubor = explode('.', $url)[0] . '.html';

  // provede http GET request
  $obsah = file_get_contents('http://kovarlu-sport-beh.test/' . $url);

  // změní adresy na koncovku .html
  $obsah = str_replace('.php', '.html', $obsah);

  if ($obsah !== false) {
    // uložení souboru
    file_put_contents($html_soubor, $obsah);
    echo $html_soubor . ' vygenerován. <br>';
  }
}
