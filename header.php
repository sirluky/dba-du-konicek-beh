<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>[TITULEK] Můj největší koníček</title>
  <!-- Roboto Font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styly.css" />
</head>

<body id="vrch">
  <div class="icon-wrapper" style="position: absolute;">
    <a href="#dolu">
      <svg style="position: relative;top:10px;left:10px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
        <line x1="12" y1="5" x2="12" y2="19"></line>
        <polyline points="19 12 12 19 5 12"></polyline>
      </svg>
    </a>
  </div>
  <div class="icon-wrapper" style="position: absolute;right:0px">
    <a href="#dolu">
      <svg style="position: relative;top:10px;right:10px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
        <line x1="12" y1="5" x2="12" y2="19"></line>
        <polyline points="19 12 12 19 5 12"></polyline>
      </svg>
    </a>
  </div>

  <div class="bg">
    <div class="container">
      <header class="p-3 text-center zahlavi">
        <img src="./media/lukaskovar.jpg" style="border-radius:50%;" alt="Lukáš Kovář Portrét" />
        <a href="./">
          <div class="">
            <h2>Lukáš Kovář</h1>
              <h3>Běh</h3>
          </div>
        </a>
      </header>
      <main class="layout-wrapper m-3">
        <aside class="left-sidebar">
          <nav id="hlavni-menu" class="menu">
            <h3 class="text-center">Menu</h3>

            <ul>
              <li>
                <a href="index.php">Domů</a>
              </li>

              <li>
                <a href="o-mne.php">O mně</a>
              </li>
              <li>
                <a href="kontakt.php">Kontakt</a>
              </li>
              <li>
                <a href="galerie.php">Galerie</a>
              </li>
              <li>
                <a href="bmi.php">Bmi</a>
                <ol>
                  <li>
                    <a href="bmi.php#kalkulacka">Kalorická kalkulačka</a>
                  </li>
                </ol>
              </li>



            </ul>
          </nav>
        </aside>