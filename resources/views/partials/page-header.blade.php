@php

$image = get_field('header_image');
$event = get_field('upcoming_event');
$countdown = get_field('countdown');

@endphp

<section class="header">
    @if (!empty($image))
        <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
    @endif
    <div class="row">
        <p class="heading col-md-8">{{ $event }}</p>
        <div class="countdown col-md-4">
            {!! $countdown !!}
        </div>
    </div>
</section>