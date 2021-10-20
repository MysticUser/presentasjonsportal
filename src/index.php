<?php

    $medlemmer[] = array(
            "navn"=>"Johannes",
            "bilde"=>"//media.discordapp.net/attachments/885832319825485845/892078569667297311/johannes.jpg",
            "beskrivelse"=>"20 år fra ingenmannsland (Hovsherad) og bor i Kvadraturen med samboeren min.
                            På VGS ble jeg introdusert til web programmering og databaser. 
                            Etter det søkte jeg på IT og informasjonssystemer som jeg nå til våren 2021 skal skrive bachelor oppgave i. 
                            Gjennom studiet har vi vært gjennom alle mulige felt av IT, men har endt opp med å ha sansen
                            for backend utvikling.
                            Jeg syntes at det er fascinerende å se hvordan data flyter gjennom flere lag med logikk, 
                            og hvordan man kan sette individuelle komponenter sammen slik det blir et system. 
                            Ved siden av studiene så jobber jeg som sikkerhetsanalytiker og hjelpelærer, og på fritiden liker jeg å tegne, 
                            gå tur i naturen, diskutere/spille musikk og kode."
    );

    $medlemmer[] = array(
            "navn"=>"Tor Inge",
            "bilde"=>"images/tor_inge_crop.png",
            "beskrivelse"=>"Jeg heter Tor Inge, er 22 år gammel, kommer fra Gjerstad og bor på Vegårshei. På fritiden liker å 
                        spille gitar, trommer og piano, og være med kjæreste og hund. Etter studiespesialisering jobbet jeg 
                        et år før jeg begynte å innse min interesse for IT. Jeg går nå siste året på bacheloren 
                        IT og Informasjonssystemer ved UiA og er glad jeg bestemte meg for å søke på IT linja. 
                        Et stykke inn i femte semester sitter jeg igjen med varierte og gode kunnskaper innen 
                        flere områder, men kanskje mest kunnskap og interesse har jeg for systemutvikling gjennom 
                        tjenestedesign."
    );

    $medlemmer[] = array(
            "navn"=>"Anders",
            "bilde"=>"images/anders.jpg",
            "beskrivelse"=>""
    );

    $medlemmer[] = array(
            "navn"=>"Thomas",
            "bilde"=>"images/thomas_crop.png",
            "beskrivelse"=>""
    );

    $medlemmer[] = array(
            "navn"=>"Bendix",
            "bilde"=>"//media.discordapp.net/attachments/885832319825485845/891766144531333141/bendix.jpg",
            "beskrivelse"=>""
    );

    $medlemmer[] = array(
            "navn"=>"Eirik",
            "bilde"=>"//useg.it/avatars/18ff2381c713b89a7237786972b86ce7",
            "beskrivelse"=>""
    );
    $medlemmer[] = array(
            "navn"=>"Espen",
            "bilde"=>"images/espen_crop.PNG",
            "beskrivelse"=>"Jeg heter Espen, er 26 år gammel, kommer fra Vennesla og bor i Kristiansand. Etter studiespesialisering gikk jeg på bibelskole, 
                            elektro og deretter bestemte jeg meg for å gå all in for IT.  Nå er jeg på siste året på Bacheloren ved UiA. 
                            Nå i semester fem har jeg praksis hos KnowIT, hvor jeg jobber med frontend (React med typescript), men jeg trives godt med backend og database.
                            På fritiden er jeg glad i å bruke tid ute, game litt, og besøke familien hjemme i Vennesla. Da får jeg også møtt hunden min, som ikke er tillatt
                            i leiligheten her jeg nå bor."
    );

?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>ASCII - Portal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Til toppen</button>
        <script>
            var mybutton = document.getElementById("myBtn");
            
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
            
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }
        </script>

        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">ASCII</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#about">Om gruppa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#medlemmer">Medlemmer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mål">Mål og Fokus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kontakt">Kontakt oss</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>


        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="top-text">
                            <p class="top-title">ASCII</p>
                            <p class="running-text">7 studenter ved Universitet i Agder.</p>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div id="introCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id="slide-1">
                                        <p class="slide-title">Hvem er vi?</p>
                                        <p class="slide-text">
                                            Vi er en gruppe på syv studenter som alle går siste året på bacheloren 
                                            IT og Informasjonssystemer ved Universitetet i Agder. Gjennom studiet har vi
                                            tilegnet oss mye erfaring med å jobbe sammen som gruppe og er vant til å 
                                            måtte samarbeide for å nå målene vi har satt oss. Våre kunnskaper innen 
                                            faget er både sterke og varierte. Vi har kunnskaper innen flere backend- og 
                                            frontend-programmeringsspråk samt design av tjenester og applikasjoner. 
                                            I tillegg har vi erfaring fra videoredigering og medieproduksjon. UiA setter 
                                            det å jobbe nøye med agile rammeverk veldig høyt og som resultat er vi blitt 
                                            veldig vant til å bruke det i våre prosjekter.
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div id="slide-2">
                                        <p class="slide-title">Interesser</p>
                                        <p class="slide-text">
                                            Vår gruppe brenner for å kunne bruke våre kunnskaper og erfaringer på reelle 
                                            prosjekter ute i arbeidslivet og tar enhver utfordring på strak arm. Vi har et bredt
                                            spekter av interesser i gruppa, blant annet front- og backendutvikling, UX/UI design
                                            og medieproduksjon. 
                                        </p>                                    
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div id="slide-3">
                                        <p class="slide-title">Ønsker</p>
                                        <p class="slide-text">
                                            Våre ønsker er å danne et godt samarbeid med en bedriftspartner og sammen jobbe
                                            mot et resultat i form av et produkt eller en tjeneste, eller annet bidrag. 
                                            Vi ønsker også å utvikle oss selv i samarbeidet med en eventuell samarbeidsparter og
                                            satser på å sitte igjen med mye god lærdom og nye erfaringer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#introCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#introCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div> 
                </div>
            </div>
        </section>

        <section id="medlemmer">
            <div class="container-fluid" id="medlem-container">
                <div class="row" id="member-top">
                    <h1 id="info-title">Medlemmer</h1>
                    <h1 id="info-text"><span>Klikk på et medlem for å bli bedre kjent</span></h1>
                </div>

                <div class="row" id="medlemInfo">
                    <div class="col">
                        <div class="row rad">

                    <?php
                    foreach ($medlemmer as $k => $m){
                    ?>
                            <div class="col members">
                                <a class="collapsed" data-bs-toggle="collapse" href="#brukerBeskrivelse<?=$k;?>" role="button" aria-expanded="false" aria-controls="brukerBeskrivelse<?=$k;?>">
                                    <div class="card" style="width: 14rem;">

                                        <img class="img-fluid" src="<?=$m['bilde'];?>" alt="<?=$m['navn'];?>">
                                        <h5 class="card-title"><?=$m['navn'];?></h5>

                                    </div>
                                </a>

                            </div>

                    <?php } ?>
                        </div>
                    </div>

<!--                <div class="">-->
                    <?php
                    foreach ($medlemmer as $k => $m){
                    ?>

                    <div class="col collapse multi-collapse" id="brukerBeskrivelse<?=$k;?>" data-bs-parent="#medlemInfo">
                            <div class="card text-white bg-success">

                                <?php /*<h3 class="card-title"><?=$m['navn'];?></h3>
                                <div class="card-body">
                                    <?=$m['beskrivelse'];?>
                                </div> */ ?>

                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?=$m['bilde'];?>" class="img-fluid rounded-start" alt="<?=$m['navn'];?>">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?=$m['navn'];?></h5>
                                            <p class="card-text"><?=$m['beskrivelse'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <?php } ?>
                </div>


                    <!--
                    <div class="col-md-2 members">
                        <a href="toringe.html">
                        <div class="member-box" id="member-2">
                            <img class="img-fluid" src="./images/tor_inge_crop.png" alt="Tor Inge">
                            <h1 class="member-title">Tor Inge</h1>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 members">
                        <a href="anders.html">
                        <div class="member-box" id="member-3">
                            <img class="img-fluid" src="images/anders.jpg" alt="Anders">
                            <h1 class="member-title">Anders</h1>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row rad">
                    <div class="col-md-2 members">
                        <a href="thomas.html">
                        <div class="member-box" id="member-4">
                            <img class="img-fluid" src="images/thomas_crop.png" alt="Thomas">
                            <h1 class="member-title">Thomas</h1>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 members">
                        <a href="bendix.html">
                        <div class="member-box" id="member-5">
                            <img class="img-fluid" src="//media.discordapp.net/attachments/885832319825485845/891766144531333141/bendix.jpg" alt="Bendix">
                            <h1 class="member-title">Bendix</h1>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 members">
                        <a href="eirik.html">
                        <div class="member-box" id="member-6">
                            <img class="img-fluid" src="//useg.it/avatars/18ff2381c713b89a7237786972b86ce7" alt="Eirik">
                            <h1 class="member-title">Eirik</h1>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 members">
                        <a href="espen.html">
                        <div class="member-box" id="member-7">
                            <img class="img-fluid" src="images/espen_crop.PNG" alt="Espen">
                            <h1 class="member-title">Espen</h1>
                        </div>
                        </a>
                    </div>
                </div>-->
            </div>

        </section>

        <section id="mål">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p id="mål-title">Mål og Fokus</p>
                        <p id="mål-text">
                            Ved vårt bachelorprosjekt har vi som mål å kunne jobbe med og utvikle et praktisk og nyttig produkt ved bruk av gode prosesser og arbeidsmetoder. Vi er en gruppe som satser høyt og ønsker 
                            en bedrift hvor vi kan utfordre oss og sette våre kunnskaper på spissen. Samtidig har vi også en sterk målsetting om å tilegne oss erfaring og læring fra prosjektet som vi kan bruke videre i våre 
                            karrierer. For oss er det viktig med et solid samarbeid med de ansatte i bedriften for å utvikle oss selv, men også for å sikre et godt og trivelig arbeidsmiljø.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontakt">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 footer-title">
                        <h1 id="footer-title">Kontakt oss</h1>
                    </div>
                    <div class="col-md-6 footer-text">
                        <h1 id="footer-text">Johannes Birkeland: johannesbi@uia.no</h1>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
