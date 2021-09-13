<article @php post_class() @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>

  </header>
  <div class="entry-summary">
    <p><?php the_field('test'); ?></p>
  </div>
</article>