@extends('layouts/app')

@section('title',__('Detail akce'))

@section('content')
    <h2>{{$event->name}}</h2>
    <br>
    <div class="row">
        <div class="col">
            <h4>Základní informace</h4>
            <ul class="no-decoration">
                <li class="row">
                    <div class="col"><strong>Začátek:</strong></div>
                    <div class="col">{{ $event->datetime_from->format(\App\Models\Event::TIME_FORMAT) }}</div>
                </li>
                <li class="row">
                    <div class="col"><strong>Konec:</strong></div>
                    <div class="col">{{ $event->datetime_to->format(\App\Models\Event::TIME_FORMAT) }}</div>
                </li>
                <li class="row">
                    <div class="col"><strong>Místo konání:</strong></div>
                    <div class="col">{{ $event->place }}</div>
                </li>
                <li class="row">
                    <div class="col"><strong>Cena:</strong></div>
                    <div class="col">{{ $event->price }}Kč</div>
                </li>
                <li class="row">
                    <div class="col"><strong>Organizátor:</strong></div>
                    <div class="col">{{ $event->organizator->first_name }} {{$event->organizator->last_name}}
                        - {{ $event->organizator->nick }}</div>
                </li>
            </ul>
        </div>
        <div class="col">
            <h4>Fotografie a články</h4>
        </div>
    </div>
@endsection
