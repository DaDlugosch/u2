@php
    $heading = get_field('previous_concerts');
@endphp

<section class="previous-concerts">
    <h2>{{ $heading }}</h2>
    <div class="concerts">
        @if(have_rows('youtube_videos'))
		    <?php while(have_rows('youtube_videos')): the_row(); ?>
            <iframe width="350" height="215" src="{!! get_sub_field('youtube_link') !!}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		    <?php endwhile; ?>
        @endif
    </div>
</section>
