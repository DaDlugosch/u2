{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@include('partials.page-header')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
@endsection
