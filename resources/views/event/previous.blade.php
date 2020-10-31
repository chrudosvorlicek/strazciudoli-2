@extends('layouts.app')

@section('title', __('Proběhlé akce'))
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
