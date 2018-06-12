@php
  $logo = get_field('logo', 'option');
  $facebook = get_field('facebook_link', 'option');
  $twitter = get_field('twitter_link', 'option');
  $instagram = get_field('instagram_link', 'option');
  $youtube = get_field('youtube_link', 'option');
  $copyright = get_field('copyright', 'option');
@endphp

<footer>
  <div class="footer container">
    <section class="row">
      @if (!empty($logo))
        <div class="logo col-md-3 col-12">
          <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}">
        </div>
      @endif
      <div class="social-icons col-md-3 col-12">
        <a href="{{ $facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="{{ $twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="{{ $instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="{{ $youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
      <nav class="nav-primary @if (empty($logo)) col-md-12 @else col-md-6 @endif col-12">
        @if (has_nav_menu('secondary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </section>
    {!! $copyright !!}
  </div>
</footer>
