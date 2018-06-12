@php
    $heading = get_field('photos_heading');
    $iframe = get_field('instagram_iframe');
@endphp

<section class="photos" id="{!! get_field('photos_id', 'option') !!}">
    <h2>{{ $heading }}</h2>
    {!! $iframe !!}
</section>