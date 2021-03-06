@extends('layouts.app')

@section('title', __('Plán činnosti'))
@section('content')
    @include('event.navbar')
    <filter-table
        count-key="{{$countKey}}"
        data-key="{{$dataKey}}"
        endpoint="{{$endpoint}}"
        :fields="{{$fields}}"
    >
    </filter-table>
@endsection
