@php
  $logo = get_field('logo', 'option');
@endphp

<header class="container">
  <div class="container">
    <section class="row">
      @if (!empty($logo))
        <div class="logo col-md-3 col-12">
          <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}">
        </div>
      @endif
      <nav class="nav-primary @if (empty($logo)) col-md-12 @else col-md-9 @endif col-12">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </section>
  </div>
</header>
