<?php require 'common_elements/header.php'; ?>
<section id="home" class="dark-lite-blue container-fluid">
  <div class="background"></div>
  <div class="row row-reset">
    <div class="artwork col-12">     
      <div class="artwork-wrap">
        <div class="sliding-vertical">
          <h1 id="banner-text">Rozwiążemy każdy <br> problem z Twoim</h1>
          <span class="animated-text">Komputerem</span>
          <span class="animated-text">Tabletem</span>
          <span class="animated-text">Smartfonem</span>
        </div>
        <img id="HomeArtwork" src="images/homeArtwork.svg" />
      </div> 
    </div>
  </div>
</section>
<a class="callme" href="/kontakt">
  <button><p>Zgłoś problem</p></button>
</a>

<section id="offer">
  <div class="row">
    <div class="topic-img-wrp col-xs-12 col-md-4">
      <div class="topic-img"><!--====================== Topic image -->
        <img src="images/stethoscope.svg" alt="">
      </div>
    </div>
    <div class="accordion-wrap col-xs-12 col-md-8">
      <div class="accordion" id="accordionOffer">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button id="btn1" class="acc-btn btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Darmowa diagnoza sprzętu komputerowego.
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOffer">
            <div class="card-body">
            Drobiazgowa diagnoza odbywa się w tym samym dniu. Kiedy sprzęt zostanie sprawdzony, skontaktujemy się w celu udzielenia szczegółowej informacji o usterce, kosztach naprawy i terminie realizacji. Następnie podejmą Państwo decyzję o przeprowadzeniu naprawy. W przypadku rezygnacji z naprawy nie ponoszą Państwo żadnych kosztów.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button id="btn2" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Naprawa i serwis komputerów
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOffer">
            <div class="card-body">
              <ul>
                <li>Wymiana ukladów graficznych.</li>
                <li>Naprawy układów zasilania</li>
                <li>Wymiana gniazd zasilania</li>
                <li>wymiana układów SMD, BGA, PLCC, DIP</li>
                <li>Wymiana matryc wszystkich marek laptopów.</li>
                <li>Modernizacja i rozbudowa.</li>
              </ul>
              <br>
              <span class="highlight">Jeśli chcą Państwo zapobiec większym naprawom, proponujemy systematyczne serwisowanie laptopów i komputerów, które wpłyną na ich żywotność i wydajność</span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button id="btn3" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Naprawa tabletów
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOffer">
            <div class="card-body">
            Naprawiamy wszystkie modele tabletów, od najbardziej popularnych ipad, samsung, bush, asusu po rzadziej spotykane na rynku.
            <br><br>
            Większośc usterek spowodowana jest upadkiem lub przygnieceniem sprzętu, wtedy powstaje uszkodznie matrycy lub digitizera. Uszkodzenie matrycy nie zawsze wiąże się z wymianą dotyku. Są to osobne elementry tableta i można je osobno wymieniać. W naszym serwisie otrzymasz darmowa diagnozę i wycenę.
            <br><br>
            Oferujemy:
            <ul>
              <li>wymiana digiterów ( panel dotykowy)</li>
              <li>nowe matryce</li>
              <li>regeneracja tasiemki matrycy</li>
              <li>naprawa ładowania baterii</li>
              <li>czyszczenie po zalaniu</li>
              <li>instalacja systemu</li>
              <li>wymiana gniazd ładowania</li>
              <li>problemy z uruchamianiem się</li>
              <li>naprawa slotów SIM i kart pamięci</li>
            </ul>
            Nasza oferta dotyczy również problemów systemowych. Zajmujemy się instalacja, przywracaniem systemu czy dodatkowym oprogramowaniem.
            <br><br>
            Duże doświadczenie w serwisowaniu tabletów pozwala zaoferować naszym klientom pomoc z takimi systemami operacyjnymi jak: nowy Windows 8.1, Android czy tez iOS.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>

<?php require 'common_elements/footer.php'; ?>  