@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Rozhľadne</h1>
        </div>
    </div>


    <!-- Dvojstlpcove sekcie -->
    <div class="container">
        <div class="row padding">
            <div class="col-lg-8">
                <h2>Rozhľadňa Terchovské srdce na Oblaze</h2>
                Rozhľadňa Terchovské srdce je vyhliadková veža zaujímavého ihlanovitého tvaru. Nachádza sa priamo nad obcou
                Terchová v nádhernej oblasti na rozhraní Kysuckej vrchoviny a Malej Fatry. Tróni nad spomínanou obcou na
                kopci Oblaz 609m a vďaka jej polohe neďaleko malofatranského národného parku má všetky predpoklady ponúknuť
                uspokojivé výhľady i tým najnáročnejším turistom. Vidno z nej nielen vrcholy Malej Fatry, ale aj dolinu
                Žilinskej kotliny s riečkou Varínka a priľahlé kopce Kysuckej vrchoviny.
            </div>
            <div class="col-lg-4">
                <img src="{{asset('images/Terchova.png')}}" class="img-fluid img-thumbnail" alt="Terchova">
            </div>
        </div>
    </div>
    <hr class="my-4">
    <div class="container">
        <div class="row padding">
            <div class="col-lg-8">
                <h2>Rozhľadňa Hrajky - pohľady na myjavské kopanice</h2>
                Rozhľadňa Hrajky je drevenou vyhliadkovou vežou nachádzajúcou sa medzi Sobotišťom a Myjavou v oblasti Turej
                lúky. Ak sa pohybujete v týchto končinách, výlet k nej je naozaj nenáročný, pretože až priamo pod ňu sa
                pohodlne dopravíte autom. Nachádza sa totiž pri hlavnej ceste medzi uvedenými obcami. Rozhľadňa neponúka
                žiadne dychberúce výhľady a predstavuje skôr spríjemnenie a zaujímavú prestávku na vašich cestách týmto
                krajom. Z výšky 298m si budete môcť pozrieť oku lahodiaci kopaničiarsky kraj. Samotný objekt rozhľadne
                dosahuje výšku 10m.
            </div>
            <div class="col-lg-4">
                <img src="{{asset('images/Hrajky.png')}}" class="img-fluid img-thumbnail" alt="Hrajky">
            </div>
        </div>
    </div>
    <hr class="my-4">
    <div class="container">
        <div class="row padding">
            <div class="col-lg-8">
                <h2>Rozhľadňa Polomské očko nad Polomkou</h2>
                Rozhľadňa Polomské očko je vyhliadková veža situovaná nad stredoslovenskou obcou Polomka v nadmorskej výške
                900m. Samotná veža je vysoká 30m a nachádza sa na najvyššom bode svahu tunajšieho lyžiarskeho strediska.
                Výborné výhľady si môžete vychutnať, ak si vyšliapete kolmo nahor zjazdovkou v dĺžke 2km.
            </div>
            <div class="col-lg-4">
                <img src="{{asset('images/Polomske.png')}}" class="img-fluid img-thumbnail" alt="Polomske">
            </div>
        </div>
    </div>
    <hr class="my-4">
    <div class="container">
        <div class="row padding">
            <div class="col-lg-8">
                <h2>Rozhľadna Hájnica - tip na výlet pre deti i akčných seniorov</h2>

                Rozhľadňa Hájnica je jednou z mnohých drevených rozhľadní, ktoré na Slovensku v posledných rokoch rastú
                doslova ako huby po daždi. Konkrétne táto sa nachádza na nevysokom kopci nad obcou Haluzice neďaleko Nového
                Mesta nad Váhom. Lákadlom rozhľadne sú najmä výhľady z nej a dobrá prístupnosť.
            </div>
            <div class="col-lg-4">
                <img src="{{asset('images/Hajnica.png')}}" class="img-fluid img-thumbnail" alt="Hajnica">
            </div>
        </div>
    </div>
@endsection
