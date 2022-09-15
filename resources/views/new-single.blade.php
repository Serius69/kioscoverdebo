@extends('layouts.footer')
@extends('layouts.register')
@extends('layouts.new-single')
@extends('layouts.titlebar')
@extends('layouts.header')

@section('title', 'Noticia')
@section('subtitle1', '{{$latest->name}}')
@section('subtitle2', ' ')

@section('content')

@section('footer')
@endsection

