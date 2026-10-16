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

    <article class="property-card">
      <div class="property-image"></div>
      <h3>2 BHK Apartment</h3>
      <p class="location">Pune</p>
      <p class="price">₹55,00,000</p>
    </article>

    <article class="property-card">
      <div class="property-image"></div>
      <h3>3 BHK Villa</h3>
      <p class="location">Mulshi</p>
      <p class="price">₹1,20,00,000</p>
    </article>

    <article class="property-card">
      <div class="property-image"></div>
      <h3>Residential Plot</h3>
      <p class="location">Lonavala</p>
      <p class="price">₹35,00,000</p>
    </article>

  </div>
</section>

<?php get_footer(); ?>