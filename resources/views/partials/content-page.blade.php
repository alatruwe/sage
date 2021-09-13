@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
  <p>' . __('Pages:', 'sage'), 'after' => '</p>
</nav>']) !!}
<section>
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