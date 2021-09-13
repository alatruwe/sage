<header class="banner">
  <div class="navbar">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      <button class="nav-button button">Try It Free</button>
    </nav>
  </div>
  <section class="intro">
    <div class="hero">
      <div class="hero_copy">
        <h1>Tools, guides, and more to build your best practice.</h1>
      </div>
      <div class="hero-form">
        <p>Our resources have helped thousands of your peers get better at their jobs. Get the latest in your inbox.</p>
        <div class="hero-input">
          <input class="email-input" type="email" name="email" placeholder="Enter your email to get started">
          <button class="button">Join Our List Now</button>
        </div>
      </div>
    </div>
  </section>
  <div class="filter-bar">
    <div>All Resources</div>
    <div>Telehealth</div>
    <div>Guides</div>
    <div>eBooks</div>
    <div>Webinars</div>
    <div>Classes</div>
    <div>Tools</div>
  </div>
</header>