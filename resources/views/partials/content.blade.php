<article @php post_class() @endphp>
  <div class="card">
    <div class="entry-summary">
      <div class="entry-content">
        @php the_content() @endphp
      </div>
      <p><?php the_field('test'); ?></p>
    </div>
  </div>

</article>