@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Fakty o Slovensku</h1>
            <p>Základné fakty o Slovensku, ktoré ti pomôžu spoznať bližšie našu krajinu...</p>
        </div>
    </div>



    <!-- Obsah stranky -->
    <div class="container">
        <div class="row mt-2">
            <div class="col-12 text-justify">
                <p><b>Oficiálny názov:</b> Slovenská republika (SR)</p>

                <p><b>Dátum vzniku štátu:</b> 1. január 1993</p>
                <p><b>Štátne zriadenie:</b> republika</p>
                <p><b>Politický systém:</b> parlamentná demokracia (150 poslancov volených na 4 roky)</p>
                <p><b>Prezident:</b> Zuzana Čaputová (od 15. 6. 2019), volený na 5 rokov</p>
                <p><b>Predseda vlády:</b> Igor Matovič (od r. 2020)</p>
                <p><b>Štátne symboly:</b> štátny znak, vlajka, pečať a hymna „Nad Tatrou sa blýska“</p>
                <p><b>Členstvo v medzinárodných organizáciách:</b> EÚ (od 1. mája 2004), NATO, OSN, UNESCO, OECD, OBSE,
                    CERN, WHO, INTERPOL atď.</p>
                <p><b>Medzinárodné kódy:</b> SK, SVK, čiarový kód 858</p>
                <p><b>Rozloha:</b> 49 035 km2</p>
                <p><b>Poloha:</b> Stredná Európa (17° až 22° v. z. d., 47° až 49° s. z. š.)
                    Stred a sever krajiny je hornatý (Karpatský oblúk), pre juh a východ sú typické nížiny (dôležité
                    poľnohospodárske oblasti). Najvýznamnejšia slovenská rieka Dunaj spája hlavné mesto SR Bratislavu s
                    dvoma hlavnými mestami susedných štátov – Viedňou a Budapešťou.</p>

                <p><b>Čas:</b> stredoeurópsky čas (+1 h od GMT)
                    (letný čas je od marca do novembra +2 h od GMT)</p>

                <p><b>Nadmorská výška:</b> najvyšší bod – Gerlachovský štít (2655 m n.m.), najnižší bod – rieka Bodrog
                    pri
                    obci Streda nad Bodrogom (94 m n.m.).</p>

                <p><b>Podnebie:</b> Mierne klimatické pásmo, striedajú sa štyri ročné obdobia, priemerná teplota v zime
                    -2
                    °C (najchladnejší mesiac: január, najchladnejšia oblasť: Vysoké Tatry), v lete 21 °C (najteplejšie
                    mesiace: júl a august, najteplejšia oblasť: Podunajská nížina). V niektorých pohoriach sa drží sneh
                    priemerne 130 dní v roku.</p>

                <p><b>Hranice so susednými štátmi:</b> Maďarsko (654,8 km), Poľsko (541,1 km), Česká republika (251,8
                    km),
                    Rakúsko (106,7 km), Ukrajina (97,8 km)</p>

                <p><b>Územnosprávne členenie:</b> 8 samosprávnych krajov (Bratislavský, Trnavský, Trenčiansky,
                    Nitriansky,
                    Žilinský, Banskobystrický, Prešovský, Košický), 79 okresov, 138 miest, 2891 obcí (vrátane miest)</p>

                <p><b>Hlavné mesto:</b> Bratislava (465 327 obyvateľov k 1. 6. 2012)</p>
                <p><b>Počet obyvateľov:</b> 5 412 008 (k 30. 6. 2013)</p>
                <p><b>Hustota zaľudnenia:</b> 110/km2</p>
                <p><b>Štátny jazyk:</b> slovenský (naučte slovenčinu svojich známych v zahraničí!</p>
                <p><b>Národnostné zloženie obyvateľstva:</b> národnosť slovenská (80,7 %), maďarská (8,5 %), rómska (2
                    %),
                    česká (0,6 %), rusínska (0,6 %), ukrajinská (0,1 %), nemecká (0,1 %), poľská (0,1 %) a iné (7,3 %)
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 bg-success">
                <p>
                    <b>Náboženstvo:</b>
                    – veriaci približne 86,6 %, z toho:<br>
                    rímskokatolíci (62 %),<br> evanjelici (5,9 %),<br> gréckokatolíci (3,8 %),<br> reformovaní kresťania
                    (1,8 %),<br>
                    pravoslávni (0,9 %)<br>
                    – iné 1,6 %, nezistené 10,6 %<br>
                    – bez vyznania približne 13,4 %
                </p>
            </div>
            <div class="col-md-4 bg-primary">
                <p>
                    <b>Štátne sviatky (sú zároveň dňami pracovného pokoja): </b>
                    1. január – Deň vzniku Slovenskej republiky<br>
                    5. júl – Sviatok sv. Cyrila a Metoda<br>
                    29. august – Výročie SNP<br>
                    1. september – Deň Ústavy Slovenskej republiky<br>
                    17. november – Deň boja za slobodu a demokraciu<br>
                </p>
            </div>
            <div class="col-md-4 bg-warning">
                <p>
                    <b>Dni pracovného pokoja: </b>
                    6. január – Zjavenie Pána (Traja králi)<br>
                    Veľký piatok<br>
                    Veľkonočný pondelok<br>
                    1. máj – Sviatok práce<br>
                    8. máj – Deň víťazstva nad fašizmom<br>
                    15. september – Sedembolestná Panna Mária<br>
                    1. november – Sviatok všetkých svätých<br>
                    24. december – Štedrý večer<br>
                    25. december – Prvý sviatok vianočný<br>
                    26. december – Druhý sviatok vianočný<br>
                </p>
            </div>
        </div>
    </div>
@endsection
