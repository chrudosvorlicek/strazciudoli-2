@extends('layouts.app')


@section('content')
    <div class="row-cols-1">
        <h2>Zasvěcovací stezka</h2>
        <p>
            Každý, kdo chce být počítán do kruhu kmene Strážců údolí, a tím se i zařadit mezi woodcraftery,
            musí do roka a do dne od přijetí sněmem za člena Ligy lesní moudrosti projít zasvěcovací stezkou.
            Výjimku tvoří bratrstvo Skřítků, děti do 10 let, kteří si plní stezku skřítků.
            Splnění jednotlivých zkoušek potvrzuje náčelník kmene nebo ohnivec.
        </p>
        <p>
            V kmeni nebo v rodě se těmito stopami prochází na schůzkách a tvoří součást programu.
            Je samozřejmé, že tyto stopy nemají nic společného se zkouškami ve škole.
            Je to vše radostná hra, plná vzrušení a malých dobrodružství, která však v sobě skrývají cenné poklady.
            Nováček nemusí projít všemi stopami. Je-li od přírody laskavý, mlčenlivý,
            prohlásí náčelník, že tyto stopy považuje u něho za vykonané a udělí mu ty,
            které postihují jeho nedostatky, kde musí ukázat, že je opravdu hoden býti počítán k woodcrafterům.
            Stezka je skončena, až ji uzná náčelník a rada orlích per za splněnou.
        </p>
    </div>
    <div class="row-cols-1 mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link @if($type === 'ls')active @endif" href="{{route('about.trail', 'ls')}}">
                    Stezka lóže skřítků
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($type === 'mlvl')active @endif" href="{{route('about.trail', 'mlvl')}}">
                    Stezka malé a velké lóže
                </a>
            </li>
        </ul>
    </div>

    <div class="row-cols-1 mt-5">
        @switch($type)
            @case('ls')
            @include('about.ls')
            @break
            @case('mlvl')
            @include('about.mlvl')
            @break
            @default
            <p>
                <strong>Vyberte jednu ze zasvěcovacích stezek</strong>
            </p>
        @endswitch
    </div>
@endsection
