<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="{{ route('about') }}">O nás</a>
        <a class="p-2 text-muted" href="{{ route('events') }}">Plán činnosti</a>
        {{--        <a class="p-2 text-muted" href="{{ route('gallery') }}">Fotokronika</a>--}}
        <a class="p-2 text-muted" href="{{ route('about.trail') }}">Zasvěcovací stezka</a>
        {{--        @if(auth()->user())--}}
        {{--            <a class="p-2 text-muted" href="{{ route('admin.members') }}">Seznam členů</a>--}}
        {{--            <a class="p-2 text-muted" href="{{ route('admin.functions') }}">Funkce</a>--}}
        {{--        @endif--}}
        {{--        <a class="p-2 text-muted" href="{{ route('clans') }}">Rody</a>--}}
        {{--        <a class="p-2 text-muted" href="{{ route('about.contacts') }}">Kontakty</a>--}}
    </nav>
</div>
