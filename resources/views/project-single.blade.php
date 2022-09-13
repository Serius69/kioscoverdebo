@extends('layouts.footer')
@extends('projects.show')
@extends('layouts.header')


@section('header', 'Kiosco Verde | {{ $project->name }}')
@section('subtitle1', 'Proyecto')
@section('subtitle2', '{{ $project->name }}')
@section('number', '500')

@section('content')
@endsection
