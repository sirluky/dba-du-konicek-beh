<?php require 'header.php' ?>
<section id="content" class="mx-2">

  <form method="get">
    <h1>Kontaktní formulář</h1>

    <p>Pokud máte k webu nějaké připomínky napište mi zprávu</p>

    <fieldset>
      <legend>Osobní údaje:</legend>

      <label for="jmeno">Jméno:</label>
      <input type="text" id="jmeno" name="jmeno" placeholder="Petr Novák" required><br>
      <label for="email">Email:</label><input id="email" type="email" name="email" id="" required><br>
      <label for="pohlavi">Pohlaví:</label>
      <input type="radio" name="pohlavi" value="muz" required>muž
      <input type="radio" name="pohlavi" value="zena">žena <br>
    </fieldset>
    <fieldset>
      <legend>Obsah zprávy:</legend>

      <label for="typzpravy">Typ zpravy: </label><select id="typzpravy" name="typzpravy" required="">
        <option value="" disabled="" selected="">Vyberte ze seznamu</option>
        <option value="pripominka">pripominka</option>
        <option value="stiznost">stiznost</option>
        <option value="zadost">zadost</option>
        <option value="hodnoceni">hodnoceni</option>
        <option value="clanek">clanek</option>
      </select>
      <br>

      <label for="vzkaz" style="position:relative;top:-30px;">Zpráva:</label>
      <textarea id="vzkaz" name="vzkaz" required></textarea><br>

      <label for="heslo">Heslo:</label><input id="heslo" type="password" name="heslo">
      <br>
      <input type="checkbox" id="potvrzVek" name="potvrzVek" required><label for="potvrzVek">Je mi minimálně 18 let</label><br>
      <input type="checkbox" id="podminky" name="podminky" required><label for="podminky">Souhlasím s podmínkami</label><br>
      <button type="submit">Odeslat</button>
    </fieldset>
  </form>

  <a href="#vrch" class="nahoru text-center d-block mt-3">🔝 Nahoru</a>
</section>
<?php require 'footer.php' ?>