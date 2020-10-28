@extends('layouts.app')

@section('title', __('Přehled akcí'))
@section('content')

    <h2>Plán činnosti</h2>

    <filter-table
        count-key="{{$countKey}}"
        data-key="{{$dataKey}}"
        endpoint="{{$endpoint}}"
        :fields="{{$fields}}"
    >
    </filter-table>
@endsection
