@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">

    <!-- Slider obrazkov-->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/Zima.png')}}" alt="Zima">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/OravskyHrad.png')}}" alt="Oravský hrad">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/Noc.png')}}" alt="Noc">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/Jaskyna.png')}}" alt="Jaskyňa">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/VysokeTatry.png')}}" alt="Vysoké Tatry">
            </div>

        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>TURISTIKA NA SLOVENSKU</h1>
            <h5>Spoznaj krásy Slovenska a zaži nezabudnuteľné zážitky v malej-VEĽKEJ krajine, v samotnom srdci
                Európy...</h5>
        </div>
    </div>


    <!-- Kratky popis stranky-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                    Objavte málo objavenú destináciu v <b>srdci Európy.</b> Vyhnete sa davom turistov, budete sa cítiť
                    ako
                    cestovateľ a
                    všetko máte po ruke – Slovensko je stredná Európa do vrecka. Objavíte stovky nečakaných zaujímavostí
                    a
                    tajomstiev takmer v každej obci, mestečku, na kopcoch aj v dolinách. Jedinečné hrady, jaskyne,
                    termálne
                    pramene, ľudová architektúra, európske Mŕtve more, slávne keltské mesto, európska divočina a mnoho
                    iného.
                    Také sú turistické <b>unikáty Slovenska</b>, ktoré by ste len ťažko hľadali niekde inde vo svete.
                    Nebojte sa
                    zísť z
                    vychodených turistických trás a okrem neopakovateľnej prírody nájdete aj jedinečné prekvapenia.
                </p>
                <p>
                    Naše malé Slovensko je tak krásnou krajinou, až si to sami často neuvedomujeme.
                    Uvedomíme si to vtedy, keď nás vychvália zahraničné média alebo turisti, ktorých stretneš pri
                    všelijakých
                    pamiatkách.
                    Chceme chodiť na zahraničné výlety, a pritom možno nevieme aké <b>bohatstvo máme doma.</b>
                    Sme maličká krajina, no núdzu o skvosty a rôzne “naj” nemáme a taká dovolenka na Slovensku je určite
                    zážitok
                    ! .
                    Trošku sa hanbíme, že sme vám po toľkých článkoch o rôznych iných krajinách ešte nepriniesli
                    zaujímavosti o
                    tej našej, ktorá je nášmu srdcu najbližšie.
                </p>
                <p>
                    Slovensko nepatrí ku krajinám, ktoré už každý navštívil.
                    Objavíte stovky nečakaných zaujímavostí a tajomstiev takmer v každej obci, či mestečku, na kopcoch
                    aj v
                    dolinách.
                    Práve na Slovensku sa môžete cítiť ako <b>naozajstní cestovatelia,</b> ktorí stále majú čo
                    objavovať.
                    Zaraďte
                    si
                    Slovensko do svojich turistických trás.
                </p>
                <p>
                    <b>Slováci sú emocionálny národ.</b> S emóciami prežívame svoje radosti, úspechy, smútky aj
                    sklamania.
                    Sme
                    úprimní,
                    priateľskí, otvorení, srdeční, pohostinní, ale aj vzťahovační. A tým sa líšime od ostatných
                    okolitých
                    národov. Napokon však víťazí naša <b>dobrosrdečnosť a dôverčivosť.</b> Vieme naplno prežívať radosti
                    aj
                    starosti
                    svojich návštevníkov, vieme sa vžiť do ich pocitov. Sme krajina priateľov!
                </p>

                <hr class="my-4">


                <!-- Dvojstlpcove sekcie -->
                <div class="container-fluid">
                    <div class="row padding">
                        <div class="col-lg-6">
                            <p>
                                Ľudové remeslá, kroje, ľudová hudba a tance sa na Slovensku odovzdávajú z generácie na
                                generáciu. V
                                každej
                                doline prevládajú rozdielne kultúrne tradície, folklór. Na Slovensku sa celoročne koná
                                veľké
                                množstvo
                                folklórnych festivalov a vystúpení. Do svetového <b>zoznamu nehmotného dedičstva
                                    UNESCO</b>
                                bola
                                zapísaná
                                <b>fujara</b> aj
                                Terchovská muzika a na zápis čakajú Radvanský jarmok či gajdy.
                            </p>
                            <p>
                                Slovensko je <b>krajina kontrastov.</b> Mení sa vám pred očami a zároveň je všetko a
                                všade
                                blízko.
                                Z
                                Podunajskej
                                nížiny ste za pár hodín v stredoeurópskych veľhorách, od pokojných vodných plôch je na
                                skok
                                k divokým
                                riečnym perejám. Z mestských aglomerácií sa rýchlo dostanete na horské samoty plné
                                romantiky,
                                nedotknutej
                                prírody a <b>prenádherných scenérií.</b>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                Vzhľadom na geografickú polohu bolo územie Slovenska vždy významnou križovatkou obchodu
                                a
                                kultúr. Na
                                relatívne malom území nachádzame vplyvy a pozostatky západných aj východných kultúr či
                                náboženstiev. Na
                                Slovensku nájdete severskú disciplinovanosť aj južanský temperament, západnú
                                racionálnosť aj
                                východnú
                                emocionálnosť. To sa odráža aj v <b>pestrosti každodenného života.</b>
                            </p>
                            <p>
                                Slovensko je <b>mladá progresívna krajina.</b> Za takmer tridsať rokov existencie
                                prechádzame
                                dynamickými
                                zmenami,
                                stále vznikajú nové veci. Svet prekvapujeme <b>technickou vyspelosťou,</b> ktorá však
                                ide
                                ruka v
                                ruke s
                                ľudskosťou.
                                Každodenne vznikajú nové spoločnosti, objekty, dominanty miest, zlepšujú sa podmienky
                                pre
                                život, no na
                                druhej strane si zachovávame aj tradičné hodnoty. <b>TO JE SLOVENSKO.</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">


    <!-- Trojstlpcova sekcia -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fab fa-css3"></i>
                <h3>CESTUJ</h3>
                <p>Neseď doma! Vyraz na cesty!</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fab fa-css3"></i>
                <h3>SPOZNÁVAJ</h3>
                <p>Preskúmaj zákutia našej krásnej krajiny! </p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fab fa-css3"></i>
                <h3>ZAŽI</h3>
                <p>Vychutnaj si nezabudnuteľné zážitky! </p>
            </div>
        </div>
    </div>

    <hr class="my-4">


    <!-- Dvojstlpcova sekcia -->
    <div class="container">
        <div class="row padding">
            <div class="col-lg-6">
                <h2>Slovensko...</h2>
                <p>Slovensko, ty si krásna krajina,
                    Si moja rodná domovina.
                    Krásne i tie hory, lesy,
                    Ďakujem kraj môj, že si.</p>
                <p>Krásne i tie Tatry,
                    Sťa obraz prestretý,
                    Tu som sa narodila, tu chcem aj žiť,
                    Boha za teba velebiť.</p>
                <p>A tá naša slovenčina,
                    Pozná ju každá malá dedina.
                    Naše nárečia sa zjednotili
                    A nový jazyk vytvorili.</p>
                <p>Každý ,ked slovenskom prechádza,
                    Všade samé krásy nachádza.
                    Slovensko krásna krajina je,
                    O tom každí ,aj malí ,Slovák vie.</p>
                <p>Za Slovensko dnes dakovať chcem,
                    Že som sa tu narodila ,že žiť tu smiem.
                    Na Slovensko vždy hrdá budem,
                    Že je to kraj krásny nikdy nezabudnem.</p>

            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/Slovensko.png') }}" class="img-fluid" alt="Slovensko">
                <img src="{{ asset('images/Slovensko1.png') }}" class="img-fluid" alt="Slovensko1">
            </div>
        </div>
    </div>





    <!--- Connect -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12 mt-5">
                <h2>Chceš zistiť viac o krásach nášho Slovenska?</h2>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook"></i>i</a>
                <a href="#"><i class="fab fa-instagram"></i>i</a>
                <a href="#"><i class="fab fa-youtube"></i>i</a>
                <a href="#"><i class="fab fa-twitter"></i>i</a>
            </div>
        </div>
    </div>
@endsection
