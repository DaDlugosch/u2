{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    @include('partials.tour')
    @include('partials.photos')
    @include('partials.previous-concerts')
@endsection
