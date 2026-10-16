<?php get_header(); ?>

<section class="hero">
  <h1>Find your dream home</h1>
  <p>Browse apartments, houses and plots in your city.</p>

  <form class="search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <input type="text" name="s" placeholder="Enter city or locality">
    <select name="type">
      <option value="">Property type</option>
      <option value="apartment">Apartment</option>
      <option value="house">House</option>
      <option value="plot">Plot</option>
    </select>
    <button type="submit">Search</button>
  </form>
</section>

<section class="featured">
  <h2>Featured properties</h2>
  <div class="property-grid">

   <?php
$properties = new WP_Query(array(
  'post_type'      => 'property',
  'posts_per_page' => 3,
));

if ($properties->have_posts()) :
  while ($properties->have_posts()) : $properties->the_post();
    $price    = get_post_meta(get_the_ID(), '_property_price', true);
    $location = get_post_meta(get_the_ID(), '_property_location', true);
    ?>
    <article class="property-card">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium_large', array('class' => 'property-thumb')); ?>
        <?php else : ?>
          <div class="property-image"></div>
        <?php endif; ?>
        <h3><?php the_title(); ?></h3>
      </a>
      <p class="location"><?php echo esc_html($location); ?></p>
      <p class="price">₹<?php echo esc_html(number_format_i18n((float) $price)); ?></p>
    </article>
    <?php
  endwhile;
  wp_reset_postdata();
else :
  echo '<p>No properties yet.</p>';
endif;
?>

  </div>
</section>

<?php get_footer(); ?>