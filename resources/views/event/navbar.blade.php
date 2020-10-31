<h2>Plán činnosti</h2>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link @if($type === 'plan')active @endif" href="{{route('events')}}">
            Nadcházející akce
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($type === 'previous')active @endif" href="{{route('previous-events')}}">
            Proběhlé akce
        </a>
    </li>
</ul>
