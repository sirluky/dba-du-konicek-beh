<?php require 'header.php' ?>
<section id="content" class="mx-2">
  <h1>BMI - Body Mass Index</h1>
  <p> BMI, neboli také Index tělesné hmotnosti
    je číslo používané jako indikátor podváhy, normální tělesné hmotnosti, nadváhy a obezity, umožňující statistické porovnávání tělesné hmotnosti lidí s různou výškou.</p>
  <table class="text-center m-auto mt-3">
    <thead>
      <tr>
        <th>Slovně</th>
        <th>Od</th>
        <th>Do</th>
        </td>
      </tr>

    </thead>
    <tbody>

      <tr>
        <td>těžká podvýživa
        <td>-INF</td>
        <td> 16.5</td>
      <tr>
        <td>podváha
        <td>16.5</td>
        <td> 18.5</td>
      <tr>
        <td>ideální (zdravá) váha
        <td>18.6</td>
        <td> 25</td>
      <tr>
        <td>nadváha
        <td>26</td>
        <td> 30</td>
      <tr>
        <td>Obezita 1. stupně
        <td>31</td>
        <td> 35</td>
      <tr>
        <td>Obezita 2. stupně
        <td>36</td>
        <td> 40</td>
      <tr>
        <td>Obezita 3. stupně
        <td>40</td>
        <td> INF</td>
    </tbody>
  </table>
  <h2>BMI kalkulačka</h2>
  <iframe id="kalkulacka" src='https://host.lkovar.tk/dba/c10%20bmi.php' style="width: 100%; height:300px;border:2px dashed gray" frameborder="0"></iframe>
  <a href="#vrch" class="nahoru text-center d-block mt-3">🔝 Nahoru</a>
</section>
<?php require 'footer.php' ?>